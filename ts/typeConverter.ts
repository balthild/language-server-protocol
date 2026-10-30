import ts from 'typescript';

import type { NodeMap } from './nodeMap.ts';

export type ClassName = string;

/**
 * An alias to `string`, `number` or `boolean` admits values the namespace
 * constants of the same name do not list, so `X::*` would be too narrow for it.
 */
function isOpenType(type: ts.TypeNode): boolean {
	return (
		type.kind === ts.SyntaxKind.StringKeyword ||
		type.kind === ts.SyntaxKind.NumberKeyword ||
		type.kind === ts.SyntaxKind.BooleanKeyword
	);
}

export class PhpType {
	readonly real: string | undefined;
	readonly documented: string;
	readonly classNames: readonly ClassName[];
	readonly iterable: boolean;

	constructor(
		real: string | undefined,
		documented: string,
		classNames: readonly ClassName[] = [],
		iterable = false,
	) {
		this.real = real;
		this.documented = documented;
		this.classNames = classNames;
		this.iterable = iterable;
	}
}

export class TypeConverter {
	private readonly nodeMap: NodeMap;

	constructor(nodeMap: NodeMap) {
		this.nodeMap = nodeMap;
	}

	phpType(type?: ts.TypeNode): PhpType {
		if (type === undefined) {
			return new PhpType(undefined, '');
		}

		switch (type.kind) {
			case ts.SyntaxKind.StringKeyword:
				return new PhpType('string', 'string');
			case ts.SyntaxKind.BooleanKeyword:
				return new PhpType('bool', 'bool');
			case ts.SyntaxKind.AnyKeyword:
				return new PhpType(undefined, 'mixed');
			case ts.SyntaxKind.NullKeyword:
				return new PhpType(undefined, 'null');
			case ts.SyntaxKind.NumberKeyword:
				return new PhpType('int', 'int');
			case ts.SyntaxKind.ObjectKeyword:
				// Objects without a declared shape are represented as arrays.
				return new PhpType('array', 'array<mixed>');
		}

		if (ts.isTupleTypeNode(type)) {
			return this.phpTypeTuple(type);
		}

		if (ts.isTypeLiteralNode(type)) {
			return this.phpTypeLiteral(type);
		}

		if (ts.isParenthesizedTypeNode(type)) {
			return new PhpType(undefined, `(${this.phpType(type.type).documented})`);
		}

		if (ts.isArrayTypeNode(type)) {
			return this.phpTypeArray(type);
		}

		if (ts.isLiteralTypeNode(type)) {
			return new PhpType(undefined, type.getText());
		}

		if (ts.isUnionTypeNode(type)) {
			return this.phpTypeUnion(type);
		}

		if (ts.isIntersectionTypeNode(type)) {
			return this.phpTypeIntersection(type);
		}

		if (ts.isTypeReferenceNode(type) && ts.isIdentifier(type.typeName)) {
			return this.phpTypeReference(type.typeName.text);
		}

		return new PhpType(undefined, '');
	}

	private phpTypeReference(typeName: string): PhpType {
		if (typeName === 'uinteger' || typeName === 'integer') {
			return new PhpType('int', 'int');
		}

		const alias = this.nodeMap.aliases.get(typeName);

		// A closed alias (a literal union) is exactly the set of namespace
		// constants, which read better as `X::*`; an open one is not.
		if (alias !== undefined && isOpenType(alias)) {
			return this.phpType(alias);
		}

		if (this.nodeMap.modules.has(typeName)) {
			return new PhpType(undefined, `${typeName}::*`);
		}

		const union = this.nodeMap.unions.get(typeName);
		if (union !== undefined) {
			return new PhpType(undefined, union.join('|'), union);
		}

		if (alias !== undefined) {
			return this.phpType(alias);
		}

		if (this.nodeMap.hasIntersectionOrInterface(typeName)) {
			return new PhpType(typeName, typeName, [typeName]);
		}

		console.warn(`Unknown type ${typeName}`);
		return new PhpType(undefined, 'mixed');
	}

	private phpTypeArray(type: ts.ArrayTypeNode): PhpType {
		const elementType = this.phpType(type.elementType);

		return new PhpType('array', `array<${elementType.documented}>`, elementType.classNames, true);
	}

	private phpTypeUnion(type: ts.UnionTypeNode): PhpType {
		const documented = type.types.map((member) => this.phpType(member).documented).join('|');

		const classNames = type.types
			.filter(ts.isTypeReferenceNode)
			.map((member) => member.typeName)
			.filter(ts.isIdentifier)
			.map((name) => name.text)
			.filter((name) => this.nodeMap.hasIntersectionOrInterface(name));

		return new PhpType(undefined, documented, classNames);
	}

	private phpTypeIntersection(type: ts.IntersectionTypeNode): PhpType {
		const documented = type.types.map((member) => this.phpType(member).documented).join('&');

		return new PhpType(undefined, documented);
	}

	private phpTypeTuple(type: ts.TupleTypeNode): PhpType {
		const elements = type.elements.map((element) => this.phpType(element).documented).join(',');

		return new PhpType('array', `array{${elements}}`);
	}

	private phpTypeLiteral(type: ts.TypeLiteralNode): PhpType {
		const members = type.members
			.filter(ts.isPropertySignature)
			.map((member) => `${member.name.getText()}:${this.phpType(member.type).documented}`);

		return new PhpType('array', `array{${members.join(',')}}`);
	}
}
