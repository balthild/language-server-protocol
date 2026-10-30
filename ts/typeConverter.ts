import ts from 'typescript';

import type { NodeMap } from './nodeMap.ts';

export type ClassName = string;

/**
 * A location inside a property value that has to be rebuilt as an object.
 *
 * The path is relative to the value itself: `''` is the value, `[]` is every
 * element of it, `a.b` is a nested key and `[].a` is a key of every element.
 */
export interface Hydration {
	readonly path: string;
	readonly candidates: readonly ClassName[];
}

/**
 * A named TypeScript type alias whose expansion is too long to repeat at every
 * use site, so it is declared once per class as a `@phpstan-type`.
 */
export interface AliasRef {
	readonly name: string;
	readonly expansion: string;
}

/**
 * Aliases shorter than this read better inlined than named.
 */
const ALIAS_THRESHOLD = 40;

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

/**
 * Joins a path prefix with a path relative to it, as in `editRange` + `insert`.
 */
function prefixPath(prefix: string, child: string): string {
	if (prefix === '') {
		return child;
	}

	if (child === '') {
		return prefix;
	}

	return child.startsWith('[') ? `${prefix}${child}` : `${prefix}.${child}`;
}

/**
 * Re-anchors hydrations under a path, so a member's own paths stay relative to
 * the member rather than to the enclosing shape.
 */
function under(prefix: string, hydrations: readonly Hydration[]): Hydration[] {
	return hydrations.map((hydration) => ({
		path: prefixPath(prefix, hydration.path),
		candidates: hydration.candidates,
	}));
}

/**
 * Merges hydrations from several sub-types. Candidates at the same path are
 * combined, because they describe alternative classes for one slot and must be
 * tried in a single attribute rather than applied one after another.
 */
function mergeHydrations(...groups: readonly (readonly Hydration[])[]): Hydration[] {
	const merged = new Map<string, ClassName[]>();

	for (const group of groups) {
		for (const hydration of group) {
			const candidates = merged.get(hydration.path) ?? [];

			for (const candidate of hydration.candidates) {
				if (!candidates.includes(candidate)) {
					candidates.push(candidate);
				}
			}

			merged.set(hydration.path, candidates);
		}
	}

	return [...merged.entries()].map(([path, candidates]) => ({ path, candidates }));
}

/**
 * Merges alias references from several sub-types, keeping one entry per name.
 */
function mergeAliases(...groups: readonly (readonly AliasRef[])[]): AliasRef[] {
	const merged = new Map<string, AliasRef>();

	for (const group of groups) {
		for (const alias of group) {
			if (!merged.has(alias.name)) {
				merged.set(alias.name, alias);
			}
		}
	}

	return [...merged.values()];
}

export class PhpType {
	readonly real: string | undefined;
	readonly documented: string;
	readonly hydrations: readonly Hydration[];
	readonly aliases: readonly AliasRef[];

	constructor(
		real: string | undefined,
		documented: string,
		hydrations: readonly Hydration[] = [],
		aliases: readonly AliasRef[] = [],
	) {
		this.real = real;
		this.documented = documented;
		this.hydrations = hydrations;
		this.aliases = aliases;
	}
}

export class TypeConverter {
	private readonly nodeMap: NodeMap;

	/**
	 * Aliases currently being expanded, so a recursive alias falls back to an
	 * inline expansion instead of naming itself.
	 */
	private readonly expanding = new Set<string>();

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
			const inner = this.phpType(type.type);

			return new PhpType(undefined, `(${inner.documented})`, inner.hydrations, inner.aliases);
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
			// The recorded union lists classes to try for this slot, in order.
			return new PhpType(undefined, union.join('|'), [{ path: '', candidates: union }]);
		}

		if (alias !== undefined) {
			return this.phpTypeAlias(typeName, alias);
		}

		if (this.nodeMap.hasIntersectionOrInterface(typeName)) {
			return new PhpType(typeName, typeName, [{ path: '', candidates: [typeName] }]);
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
		return new PhpType(
			'array',
			`list<${elementType.documented}>`,
			under('[]', elementType.hydrations),
			elementType.aliases,
		);
	}

	private phpTypeUnion(type: ts.UnionTypeNode): PhpType {
		const members = type.types.map((member) => this.phpType(member));

		return new PhpType(
			undefined,
			members.map((member) => member.documented).join('|'),
			mergeHydrations(...members.map((member) => member.hydrations)),
			mergeAliases(...members.map((member) => member.aliases)),
		);
	}

	/**
	 * A long alias keeps its name, declared once per class, so readers do not have
	 * to trace the same expansion through every property. Its declaration may
	 * itself name other aliases; those are declared alongside it.
	 */
	private phpTypeAlias(typeName: string, alias: ts.TypeNode): PhpType {
		// Names that already denote a generated PHP type would shadow it, and a
		// self-referential alias cannot be named inside its own declaration.
		if (this.isPhpTypeName(typeName) || this.expanding.has(typeName)) {
			return this.phpType(alias);
		}

		this.expanding.add(typeName);

		let expansion: PhpType;
		try {
			expansion = this.phpType(alias);
		} finally {
			this.expanding.delete(typeName);
		}

		if (expansion.documented.length < ALIAS_THRESHOLD) {
			return expansion;
		}

		// Naming the alias changes how the type reads, not what it is: the native
		// type and the slots to hydrate still come from the expansion.
		return new PhpType(expansion.real, typeName, expansion.hydrations, [
			...expansion.aliases,
			{ name: typeName, expansion: expansion.documented },
		]);
	}

	private isPhpTypeName(name: string): boolean {
		return (
			this.nodeMap.interfaces.has(name) ||
			this.nodeMap.intersections.has(name) ||
			this.nodeMap.typeLiterals.has(name) ||
			this.nodeMap.modules.has(name)
		);
	}

	private phpTypeIntersection(type: ts.IntersectionTypeNode): PhpType {
		const members = type.types.map((member) => this.phpType(member));

		return new PhpType(
			undefined,
			members.map((member) => member.documented).join('&'),
			mergeHydrations(...members.map((member) => member.hydrations)),
			mergeAliases(...members.map((member) => member.aliases)),
		);
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
		const elements = type.elements.map((element) => this.phpType(element));

		return new PhpType(
			'array',
			`array{${elements.map((element) => element.documented).join(', ')}}`,
			mergeHydrations(
				...type.elements.map((element, index) => under(String(index), elements[index].hydrations)),
			),
			mergeAliases(...elements.map((element) => element.aliases)),
		);
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
			const value = this.phpType(signature.type);

			// Map values are left as they are: a key of the map is a string, so
			// there is no slot path that could address them.
			return new PhpType('array', `array<${key}, ${value.documented}>`, [], value.aliases);
		}

		const members = properties.map((member) => this.phpType(member.type));

		const rendered = properties.map((member, index) => {
			// `?` marks an optional key. Dropping it would make every union variant
			// of a shape render identically, and stricter than it really is.
			const optional = member.questionToken === undefined ? '' : '?';

			return `${member.name.getText()}${optional}: ${members[index].documented}`;
		});

		// A member typed as a class needs hydrating at that member's key, which is
		// what makes `array{range: Range}` hold a Range and not a raw array.
		return new PhpType(
			'array',
			`array{${rendered.join(', ')}}`,
			mergeHydrations(
				...properties.map((member, index) =>
					under(member.name.getText(), members[index].hydrations),
				),
			),
			mergeAliases(...members.map((member) => member.aliases)),
		);
	}
}
