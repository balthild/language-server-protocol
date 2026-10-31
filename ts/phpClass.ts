import * as path from 'node:path';

import ts from 'typescript';

import type { NodeMap } from './nodeMap.ts';
import type { AliasRef, PhpType, ShapeNode, TypeConverter } from './typeConverter.ts';
import { nullableShape } from './typeConverter.ts';

function forEachDescendant(node: ts.Node, callback: (node: ts.Node) => void): void {
	callback(node);
	ts.forEachChild(node, (child) => {
		forEachDescendant(child, callback);
	});
}

/**
 * The path is given relative to the repository root so that it can be opened
 * directly, including the files taken from `node_modules`.
 */
function sourceFilePath(node: ts.Node): string {
	return path.relative(
		path.resolve(import.meta.dirname, '../node_modules'),
		node.getSourceFile().fileName,
	);
}

function jsDocs(node: ts.Node): string[] {
	return ts
		.getJSDocCommentsAndTags(node)
		.filter(ts.isJSDoc)
		.flatMap((doc) => {
			const comment = ts.getTextOfJSDocComment(doc.comment);

			return comment ? comment.split('\r\n') : [];
		});
}

/**
 * `null` in a type position is either a `NullKeyword` directly or a
 * `LiteralType` wrapping a `NullLiteral`, depending on the parser version.
 */
function isNullType(type: ts.TypeNode): boolean {
	if (type.kind === ts.SyntaxKind.NullKeyword) {
		return true;
	}

	return ts.isLiteralTypeNode(type) && type.literal.kind === ts.SyntaxKind.NullKeyword;
}

function isNullable(property: ts.PropertySignature): boolean {
	if (property.questionToken) {
		return true;
	}

	if (property.type === undefined || !ts.isUnionTypeNode(property.type)) {
		return false;
	}

	return property.type.types.some(isNullType);
}

function resolveClassParent(extendsClause: ts.HeritageClause): string | undefined {
	return extendsClause.types[0]?.getText();
}

export function constantsFromModule(module: ts.ModuleDeclaration): PhpConstants {
	const constants: PhpConstants = new Map();

	forEachDescendant(module, (node) => {
		if (!ts.isVariableDeclaration(node) || !ts.isIdentifier(node.name)) {
			return;
		}

		const name = node.name.text;

		if (node.type !== undefined && ts.isLiteralTypeNode(node.type)) {
			constants.set(name, new PhpConstant(name, node.type.literal.getText()));
			return;
		}

		if (node.initializer !== undefined) {
			constants.set(name, new PhpConstant(name, node.initializer.getText()));
		}
	});

	return constants;
}

export abstract class PhpClassLike {
	readonly name: string;
	readonly docs: readonly string[];
	readonly sourceFile: string;

	constructor(name: string, sourceFile: string, docs: readonly string[] = []) {
		this.name = name;
		this.sourceFile = sourceFile;
		this.docs = docs;
	}
}

export class PhpInterface extends PhpClassLike {
	readonly constants: PhpConstants;

	constructor(
		name: string,
		sourceFile: string,
		docs: readonly string[] = [],
		constants: PhpConstants = new Map(),
	) {
		super(name, sourceFile, docs);
		this.constants = constants;
	}
}

export class PhpConstant {
	readonly name: string;
	readonly rawValue: string;

	constructor(name: string, rawValue: string) {
		this.name = name;
		this.rawValue = rawValue;
	}
}

export class PhpClass extends PhpClassLike {
	properties: Properties = new Map();
	mixins: string[] = [];
	extends?: string;
}

export type Properties = Map<string, Property>;
export type PhpConstants = Map<string, PhpConstant>;
export type PhpClasses = Map<string, PhpClassLike>;

export interface Property {
	readonly name: string;
	readonly type: PhpType;
	readonly nullable: boolean;
	readonly docs: readonly string[];
	readonly special: readonly string[];
	readonly aliases: readonly AliasRef[];
	readonly shape: ShapeNode | undefined;
}

export class PhpClassResolver {
	private readonly nodeMap: NodeMap;
	private readonly typeConverter: TypeConverter;

	constructor(nodeMap: NodeMap, typeConverter: TypeConverter) {
		this.nodeMap = nodeMap;
		this.typeConverter = typeConverter;
	}

	fromNodeMap(): PhpClasses {
		const classes: PhpClasses = new Map();

		for (const [name, module] of this.nodeMap.modules) {
			const phpInterface = this.interfaceFromModule(name, module);
			if (phpInterface !== undefined) {
				classes.set(name, phpInterface);
			}
		}

		for (const declaration of this.nodeMap.interfaces.values()) {
			const phpClass = this.fromInterface(declaration);
			classes.set(phpClass.name, this.hydrateMixins(phpClass));
		}

		for (const [name, type] of this.nodeMap.intersections) {
			classes.set(name, this.fromIntersectionTypeNode(name, type));
		}

		for (const [name, type] of this.nodeMap.typeLiterals) {
			classes.set(name, this.fromTypeLiteral(name, type));
		}

		return classes;
	}

	private fromTypeLiteral(name: string, type: ts.TypeLiteralNode): PhpClass {
		const phpClass = new PhpClass(name, sourceFilePath(type));
		phpClass.properties = this.mapProperties(type.members);

		return phpClass;
	}

	private fromIntersectionTypeNode(name: string, type: ts.IntersectionTypeNode): PhpClass {
		const phpClass = new PhpClass(name, sourceFilePath(type));

		for (const member of type.types) {
			const literal = this.resolveLiteral(member);

			if (literal !== undefined) {
				phpClass.properties = new Map([
					...phpClass.properties,
					...this.mapProperties(literal.members),
				]);
				continue;
			}

			const mixin = this.typeConverter.phpType(member).real;
			if (mixin !== undefined) {
				phpClass.mixins.push(mixin);
			}
		}

		return this.hydrateMixins(phpClass);
	}

	/**
	 * An intersection member is either an inline literal or a reference to a type
	 * alias for one. The latter has no PHP class of its own, so its properties are
	 * merged in rather than treated as a mixin.
	 */
	private resolveLiteral(member: ts.TypeNode): ts.TypeLiteralNode | undefined {
		if (ts.isTypeLiteralNode(member)) {
			return member;
		}

		if (!ts.isTypeReferenceNode(member) || !ts.isIdentifier(member.typeName)) {
			return undefined;
		}

		const alias = this.nodeMap.aliases.get(member.typeName.text);

		return alias !== undefined && ts.isTypeLiteralNode(alias) ? alias : undefined;
	}

	private fromInterface(declaration: ts.InterfaceDeclaration): PhpClass {
		const phpClass = new PhpClass(
			declaration.name.text,
			sourceFilePath(declaration),
			jsDocs(declaration),
		);
		const mixins: string[] = [];

		for (const clause of declaration.heritageClauses ?? []) {
			if (clause.token === ts.SyntaxKind.ExtendsKeyword) {
				phpClass.extends = resolveClassParent(clause);
			}

			for (const type of clause.types) {
				if (ts.isIdentifier(type.expression)) {
					mixins.push(type.expression.text);
				}
			}
		}

		phpClass.properties = this.mapProperties(declaration.members);
		phpClass.mixins = mixins;

		return phpClass;
	}

	private mapProperties(members: ts.NodeArray<ts.TypeElement>): Properties {
		const properties: Properties = new Map();

		for (const member of members) {
			if (!ts.isPropertySignature(member) || !ts.isIdentifier(member.name)) {
				continue;
			}

			const special: string[] = [];
			if (member.type?.getText() === 'DocumentUri') {
				special.push('uri');
			}

			const type = this.typeConverter.phpType(member.type);
			const nullable = isNullable(member);

			const property: Property = {
				docs: jsDocs(member),
				name: member.name.text,
				type,
				nullable,
				special,
				aliases: type.aliases,
				shape:
					type.shape === undefined ? undefined : nullable ? nullableShape(type.shape) : type.shape,
			};

			properties.set(property.name, property);
		}

		return properties;
	}

	private interfaceFromModule(
		name: string,
		module: ts.ModuleDeclaration,
	): PhpInterface | undefined {
		const constants = constantsFromModule(module);

		if (constants.size === 0) {
			return undefined;
		}

		return new PhpInterface(name, sourceFilePath(module), jsDocs(module), constants);
	}

	private hydrateMixins(phpClass: PhpClass): PhpClass {
		for (const mixinName of phpClass.mixins) {
			const mixin = this.nodeMap.interfaces.get(mixinName);

			if (mixin === undefined) {
				console.warn(`MixIn ${mixinName} is not a mapped interface`);
				continue;
			}

			const mixinProperties = this.hydrateMixins(this.fromInterface(mixin)).properties;
			phpClass.properties = new Map([...phpClass.properties, ...mixinProperties]);
		}

		return phpClass;
	}
}
