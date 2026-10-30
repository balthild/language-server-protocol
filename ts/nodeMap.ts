import ts from 'typescript';

import { constantsFromModule } from './phpClass.ts';

type TypeAliasMap = Map<string, ts.TypeNode>;
type IntersectionMap = Map<string, ts.IntersectionTypeNode>;
type UnionMap = Map<string, string[]>;
type TypeLiteralMap = Map<string, ts.TypeLiteralNode>;
type InterfaceMap = Map<string, ts.InterfaceDeclaration>;
type ModuleMap = Map<string, ts.ModuleDeclaration>;

/** Type aliases whose literal form is also emitted as a PHP class. */
const TYPE_LITERAL_ALIASES = new Set([
	'InlayHint',
	'InlineValueText',
	'InlineValueVariableLookup',
	'InlineValueEvaluatableExpression',
]);

export class NodeMap {
	readonly aliases: TypeAliasMap = new Map();
	readonly intersections: IntersectionMap = new Map();
	readonly unions: UnionMap = new Map();
	readonly interfaces: InterfaceMap = new Map();
	readonly modules: ModuleMap = new Map();
	readonly typeLiterals: TypeLiteralMap = new Map();
	readonly typeParameters: Set<string> = new Set();

	hasIntersectionOrInterface(name: string): boolean {
		return this.intersections.has(name) || this.interfaces.has(name);
	}
}

/**
 * Generic type parameters such as the `T` of `InitializeResult<T = any>` have no
 * PHP counterpart, so they are collected to be resolved to `mixed`.
 */
function isDeclarationWithTypeParameters(
	node: ts.Node,
): node is ts.Node & { typeParameters: ts.NodeArray<ts.TypeParameterDeclaration> } {
	return 'typeParameters' in node && Array.isArray(node.typeParameters);
}

export function createNodeMap(nodes: readonly ts.Node[], filter?: RegExp): NodeMap {
	const map = new NodeMap();

	for (const node of nodes) {
		node.forEachChild((child) => {
			if (filter !== undefined && !filter.test(child.getText())) {
				return;
			}

			if (isDeclarationWithTypeParameters(child)) {
				for (const parameter of child.typeParameters) {
					map.typeParameters.add(parameter.name.text);
				}
			}

			if (ts.isTypeAliasDeclaration(child)) {
				const name = child.name.text;

				if (ts.isIntersectionTypeNode(child.type)) {
					map.intersections.set(name, child.type);
					return;
				}

				if (ts.isUnionTypeNode(child.type)) {
					if (name === 'TextDocumentContentChangeEvent') {
						const [incremental, full] = child.type.types;

						if (!ts.isTypeLiteralNode(incremental) || !ts.isTypeLiteralNode(full)) {
							return;
						}

						map.typeLiterals.set('TextDocumentContentChangeIncrementalEvent', incremental);
						map.typeLiterals.set('TextDocumentContentChangeFullEvent', full);
						map.unions.set(name, [
							'TextDocumentContentChangeIncrementalEvent',
							'TextDocumentContentChangeFullEvent',
						]);

						return;
					}
				}

				if (TYPE_LITERAL_ALIASES.has(name) && ts.isTypeLiteralNode(child.type)) {
					map.typeLiterals.set(name, child.type);
				}

				map.aliases.set(name, child.type);
				return;
			}

			if (ts.isModuleDeclaration(child)) {
				// A namespace carrying constants becomes a PHP interface even when a
				// type alias shares its name: the alias only supplies the type, while
				// the constants are API of their own. Which of the two declarations
				// comes first in the source must not change the result.
				if (constantsFromModule(child).size > 0) {
					map.modules.set(child.name.text, child);
				}

				return;
			}

			if (ts.isInterfaceDeclaration(child)) {
				// A type alias shadows an interface of the same name.
				if (!map.aliases.has(child.name.text)) {
					map.interfaces.set(child.name.text, child);
				}
			}
		});
	}

	return map;
}
