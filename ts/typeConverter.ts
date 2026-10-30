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

		if (ts.isTypeQueryNode(type)) {
			return this.phpTypeQuery(type);
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

		// A generic type parameter is erased: `InitializeResult<T = any>` keeps
		// `T` where PHP would need `mixed`.
		if (this.nodeMap.typeParameters.has(typeName)) {
			return new PhpType(undefined, 'mixed');
		}

		console.warn(`Unknown type ${typeName}`);
		return new PhpType(undefined, 'mixed');
	}

	private phpTypeArray(type: ts.ArrayTypeNode): PhpType {
		const elementType = this.phpType(type.elementType);

		// A TypeScript array is dense and zero-indexed, which is `list`, not
		// `array`: the latter admits string keys.
		return new PhpType('array', `list<${elementType.documented}>`, elementType.classNames, true);
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

	/**
	 * `typeof X.Y` is the type of a constant, so it resolves to that constant's
	 * value when the namespace is known.
	 */
	private phpTypeQuery(type: ts.TypeQueryNode): PhpType {
		if (!ts.isQualifiedName(type.exprName)) {
			return new PhpType(undefined, 'mixed');
		}

		const { left, right } = type.exprName;
		const value = ts.isIdentifier(left)
			? this.nodeMap.constantValue(left.text, right.text)
			: undefined;

		if (value === undefined) {
			console.warn(`Unknown constant ${type.getText()}`);
			return new PhpType(undefined, 'mixed');
		}

		return new PhpType(undefined, value);
	}

	private phpTypeTuple(type: ts.TupleTypeNode): PhpType {
		const elements = type.elements.map((element) => this.phpType(element).documented);

		return new PhpType('array', `array{${elements.join(', ')}}`);
	}

	private phpTypeLiteral(type: ts.TypeLiteralNode): PhpType {
		const properties = type.members.filter(ts.isPropertySignature);
		const indexSignatures = type.members.filter(ts.isIndexSignatureDeclaration);

		// A literal holding nothing but an index signature is a map, not a record
		// with fixed keys: `{ [uri: string]: TextEdit[] }` is
		// `array<string, list<TextEdit>>`.
		if (properties.length === 0 && indexSignatures.length > 0) {
			const signature = indexSignatures[0];
			const keyType = signature.parameters[0]?.type;
			const key = keyType === undefined ? 'string' : this.phpType(keyType).documented;
			const value = this.phpType(signature.type).documented;

			// `classNames` is deliberately not carried over: the elements to
			// hydrate sit one level deeper than `iterable` can express.
			return new PhpType('array', `array<${key}, ${value}>`);
		}

		const members = properties.map((member) => {
			// `?` marks an optional key. Dropping it would make every union variant
			// of a shape render identically, and stricter than it really is.
			const optional = member.questionToken === undefined ? '' : '?';

			return `${member.name.getText()}${optional}: ${this.phpType(member.type).documented}`;
		});

		return new PhpType('array', `array{${members.join(', ')}}`);
	}
}
