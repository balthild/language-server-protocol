import ts from 'typescript';

import type { NodeMap } from './nodeMap.ts';

export type ClassName = string;

/**
 * A node of the data description emitted as a {@see Shape} attribute.
 *
 * The tree stops at `any` wherever the protocol describes an anonymous
 * associative array, because there is no class to hydrate there.
 */
export type ShapeNode =
	| { readonly kind: 'any' }
	| { readonly kind: 'class'; readonly name: ClassName }
	| { readonly kind: 'scalar'; readonly name: string }
	| { readonly kind: 'literal'; readonly value: string }
	| { readonly kind: 'list'; readonly element: ShapeNode }
	| { readonly kind: 'map'; readonly key: ShapeNode; readonly value: ShapeNode }
	| { readonly kind: 'shape'; readonly members: readonly ShapeMember[] }
	| { readonly kind: 'union'; readonly members: readonly ShapeNode[] };

export interface ShapeMember {
	readonly name: string;
	readonly optional: boolean;
	readonly node: ShapeNode;
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
 * Adds `null` as an alternative branch, for a property declared nullable.
 */
export function nullableShape(shape: ShapeNode): ShapeNode {
	if (
		shape.kind === 'union' &&
		shape.members.some((m) => m.kind === 'scalar' && m.name === 'null')
	) {
		return shape;
	}

	return { kind: 'union', members: [shape, { kind: 'scalar', name: 'null' }] };
}

/**
 * Whether a node needs a PHP class to be built, which is the only reason to
 * describe an anonymous shape in detail.
 */
function isHydratable(node: ShapeNode): boolean {
	switch (node.kind) {
		case 'class':
			return true;
		case 'list':
			return isHydratable(node.element);
		case 'map':
			return isHydratable(node.value);
		case 'shape':
			return node.members.some((member) => isHydratable(member.node));
		case 'union':
			return node.members.some(isHydratable);
		default:
			return false;
	}
}

/**
 * Flattens a union so nested unions become one level, which is what a `union`
 * node expects.
 */
function flattenUnion(nodes: readonly ShapeNode[]): ShapeNode[] {
	const flattened: ShapeNode[] = [];

	for (const node of nodes) {
		if (node.kind === 'union') {
			flattened.push(...flattenUnion(node.members));
			continue;
		}

		flattened.push(node);
	}

	return flattened;
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
	readonly shape: ShapeNode | undefined;
	readonly aliases: readonly AliasRef[];

	constructor(
		real: string | undefined,
		documented: string,
		shape?: ShapeNode,
		aliases: readonly AliasRef[] = [],
	) {
		this.real = real;
		this.documented = documented;
		this.shape = shape;
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
				return new PhpType('string', 'string', { kind: 'scalar', name: 'string' });
			case ts.SyntaxKind.BooleanKeyword:
				return new PhpType('bool', 'bool', { kind: 'scalar', name: 'bool' });
			case ts.SyntaxKind.AnyKeyword:
				return new PhpType(undefined, 'mixed', { kind: 'scalar', name: 'mixed' });
			case ts.SyntaxKind.NullKeyword:
				return new PhpType(undefined, 'null', { kind: 'scalar', name: 'null' });
			case ts.SyntaxKind.NumberKeyword:
				return new PhpType('int', 'int', { kind: 'scalar', name: 'int' });
			case ts.SyntaxKind.ObjectKeyword:
				// Objects without a declared shape are represented as arrays.
				return new PhpType('array', 'array<mixed>', {
					kind: 'map',
					key: { kind: 'scalar', name: 'string' },
					value: { kind: 'scalar', name: 'mixed' },
				});
		}

		if (ts.isTupleTypeNode(type)) {
			return this.phpTypeTuple(type);
		}

		if (ts.isTypeLiteralNode(type)) {
			return this.phpTypeLiteral(type);
		}

		if (ts.isParenthesizedTypeNode(type)) {
			const inner = this.phpType(type.type);

			return new PhpType(undefined, `(${inner.documented})`, inner.shape, inner.aliases);
		}

		if (ts.isArrayTypeNode(type)) {
			return this.phpTypeArray(type);
		}

		if (ts.isLiteralTypeNode(type)) {
			return new PhpType(undefined, type.getText(), { kind: 'literal', value: type.getText() });
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
			return new PhpType('int', 'int', { kind: 'scalar', name: 'int' });
		}

		const alias = this.nodeMap.aliases.get(typeName);

		// A closed alias (a literal union) is exactly the set of namespace
		// constants, which read better as `X::*`; an open one is not.
		if (alias !== undefined && isOpenType(alias)) {
			return this.phpType(alias);
		}

		if (this.nodeMap.modules.has(typeName)) {
			// The constants of the namespace are exactly the values the alias
			// lists, so the alias describes the accepted data.
			const shape = alias === undefined ? { kind: 'any' as const } : this.phpType(alias).shape;

			return new PhpType(undefined, `${typeName}::*`, shape);
		}

		const union = this.nodeMap.unions.get(typeName);
		if (union !== undefined) {
			// The recorded union lists classes to try for this slot, in order.
			return new PhpType(undefined, union.join('|'), {
				kind: 'union',
				members: union.map((name) => ({ kind: 'class' as const, name })),
			});
		}

		if (alias !== undefined) {
			return this.phpTypeAlias(typeName, alias);
		}

		if (this.nodeMap.hasIntersectionOrInterface(typeName)) {
			return new PhpType(typeName, typeName, { kind: 'class', name: typeName });
		}

		// A generic type parameter is erased: `InitializeResult<T = any>` keeps
		// `T` where PHP would need `mixed`.
		if (this.nodeMap.typeParameters.has(typeName)) {
			return new PhpType(undefined, 'mixed', { kind: 'scalar', name: 'mixed' });
		}

		console.warn(`Unknown type ${typeName}`);
		return new PhpType(undefined, 'mixed', { kind: 'scalar', name: 'mixed' });
	}

	private phpTypeArray(type: ts.ArrayTypeNode): PhpType {
		const elementType = this.phpType(type.elementType);

		// A TypeScript array is dense and zero-indexed, which is `list`, not
		// `array`: the latter admits string keys.
		return new PhpType(
			'array',
			`list<${elementType.documented}>`,
			{ kind: 'list', element: elementType.shape ?? { kind: 'any' } },
			elementType.aliases,
		);
	}

	private phpTypeUnion(type: ts.UnionTypeNode): PhpType {
		const members = type.types.map((member) => this.phpType(member));

		return new PhpType(
			undefined,
			members.map((member) => member.documented).join('|'),
			{
				kind: 'union',
				members: flattenUnion(members.map((member) => member.shape ?? { kind: 'any' })),
			},
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
		// type and the described data still come from the expansion.
		return new PhpType(expansion.real, typeName, expansion.shape, [
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

		// An intersection requires every member at once; for validation the first
		// member that accepts the data is the closest approximation.
		return new PhpType(
			undefined,
			members.map((member) => member.documented).join('&'),
			{
				kind: 'union',
				members: flattenUnion(members.map((member) => member.shape ?? { kind: 'any' })),
			},
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
			return new PhpType(undefined, 'mixed', { kind: 'scalar', name: 'mixed' });
		}

		return new PhpType(undefined, value, { kind: 'literal', value });
	}

	private phpTypeTuple(type: ts.TupleTypeNode): PhpType {
		const elements = type.elements.map((element) => this.phpType(element));

		return new PhpType(
			'array',
			`array{${elements.map((element) => element.documented).join(', ')}}`,
			{
				kind: 'shape',
				members: type.elements.map((_, index) => ({
					name: String(index),
					optional: false,
					node: elements[index].shape ?? { kind: 'any' },
				})),
			},
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

			return new PhpType(
				'array',
				`array<${key}, ${value.documented}>`,
				{
					kind: 'map',
					key: { kind: 'scalar', name: 'string' },
					value: value.shape ?? { kind: 'any' },
				},
				value.aliases,
			);
		}

		const members = properties.map((member) => this.phpType(member.type));

		const rendered = properties.map((member, index) => {
			// `?` marks an optional key. Dropping it would make every union variant
			// of a shape render identically, and stricter than it really is.
			const optional = member.questionToken === undefined ? '' : '?';

			return `${member.name.getText()}${optional}: ${members[index].documented}`;
		});

		// Nothing inside this shape needs hydrating when every member is a scalar,
		// so the tree stops there instead of describing keys nobody will read.
		const hydratable = members.some(
			(member) => member.shape !== undefined && isHydratable(member.shape),
		);

		return new PhpType(
			'array',
			`array{${rendered.join(', ')}}`,
			hydratable
				? {
						kind: 'shape',
						members: properties.map((member, index) => ({
							name: member.name.getText(),
							optional: member.questionToken !== undefined,
							node: members[index].shape ?? { kind: 'any' },
						})),
					}
				: { kind: 'any' },
			mergeAliases(...members.map((member) => member.aliases)),
		);
	}
}
