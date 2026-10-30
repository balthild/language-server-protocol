import { constantCase } from 'change-case';

import { PhpClass, PhpClassLike, PhpInterface } from './phpClass.ts';
import type { PhpConstant, Property } from './phpClass.ts';
import type { AliasRef, ShapeNode } from './typeConverter.ts';

/**
 * `class` is a reserved word in PHP, so a constant derived from it needs a
 * trailing underscore.
 */
function constantName(constant: PhpConstant): string {
	const name = constantCase(constant.name).toUpperCase();

	return name === 'CLASS' ? 'CLASS_' : name;
}

/**
 * PHP requires parameters without defaults before those with one, so nullable
 * properties must come last.
 */
function orderedProperties(phpClass: PhpClass): Property[] {
	return [...phpClass.properties.values()].sort(
		(property1, property2) => Number(property1.nullable) - Number(property2.nullable),
	);
}

/**
 * The `@var` tag is only needed when the native type cannot express the
 * documented one, or when there is no native type at all.
 */
function needsVarAnnotation(property: Property): boolean {
	const real = property.type.real;

	if (real === undefined) {
		return true;
	}

	const documented = property.type.documented;

	return documented !== real && documented !== `${real}|null`;
}

/**
 * Collects the alias declarations a class needs, one per distinct name.
 */
function collectAliases(properties: readonly Property[]): AliasRef[] {
	const merged = new Map<string, AliasRef>();

	for (const property of properties) {
		for (const alias of property.aliases) {
			if (!merged.has(alias.name)) {
				merged.set(alias.name, alias);
			}
		}
	}

	return [...merged.values()];
}

/**
 * Renders a shape node as the PHP expression the {@see Shape} attribute takes.
 */
function renderShape(node: ShapeNode): string {
	switch (node.kind) {
		case 'any':
			return 'new Shape\\Any()';
		case 'class':
			return `${node.name}::class`;
		case 'scalar':
			return `new Shape\\Scalar('${node.name}')`;
		case 'literal':
			return `new Shape\\Literal(${node.value})`;
		case 'list':
			return `new Shape\\Sequence(${renderShape(node.element)})`;
		case 'map':
			return `new Shape\\Map(${renderShape(node.key)}, ${renderShape(node.value)})`;
		case 'shape': {
			const members = node.members.map(
				(member) => `'${member.name}${member.optional ? '?' : ''}' => ${renderShape(member.node)}`,
			);

			return `new Shape\\Struct([${members.join(', ')}])`;
		}
		case 'union':
			return `new Shape\\Union(${node.members.map(renderShape).join(', ')})`;
	}
}

function renderAttributes(property: Property): string[] {
	if (property.shape === undefined) {
		return [];
	}

	return [`#[Shape(${renderShape(property.shape)})]`];
}

export class Renderer {
	render(phpClass: PhpClassLike): string {
		if (phpClass instanceof PhpClass) {
			return this.renderClass(phpClass);
		}

		if (phpClass instanceof PhpInterface) {
			return this.renderInterface(phpClass);
		}

		throw new Error('Cannot render unknown PHP class-like');
	}

	private renderInterface(phpClass: PhpInterface): string {
		const source = [
			'<?php // Auto-generated from vscode-languageserver-protocol (typescript)',
			'',
			'namespace Phpactor\\LanguageServerProtocol;',
			'',
			`interface ${phpClass.name}`,
			'{',
		];

		for (const constant of phpClass.constants.values()) {
			const value = constant.rawValue.replace(/`/g, "'");
			source.push(`    public const ${constantName(constant)} = ${value};`);
		}

		source.push('}');

		return source.join('\n');
	}

	private renderClass(phpClass: PhpClass): string {
		const properties = orderedProperties(phpClass);
		const isRoot = phpClass.extends === undefined;
		const usesShape = properties.some((property) => property.shape !== undefined);

		const source = [
			'<?php // Auto-generated from vscode-languageserver-protocol (typescript)',
			'',
			'namespace Phpactor\\LanguageServerProtocol;',
			'',
		];

		const imports: string[] = [];
		if (isRoot) {
			imports.push('ArrayDeserializable');
		}
		if (usesShape) {
			imports.push('Shape');
		}
		if (isRoot) {
			imports.push('FromArray');
		}
		for (const imported of imports) {
			source.push(`use Phpactor\\LanguageServerProtocol\\Support\\${imported};`);
		}
		if (imports.length > 0) {
			source.push('');
		}

		const aliases = collectAliases(properties);
		const hasDocblock =
			phpClass.mixins.length > 0 || phpClass.docs.length > 0 || aliases.length > 0;

		if (hasDocblock) {
			source.push('/**');
			let hasBody = false;

			for (const doc of phpClass.docs) {
				for (const line of doc.split('\n')) {
					source.push(` * ${line}`);
				}
				hasBody = true;
			}

			if (phpClass.mixins.length > 0) {
				if (hasBody) {
					source.push(' *');
				}
				source.push(` * Mixins (implemented TS interfaces): ${phpClass.mixins.join(', ')}`);
				hasBody = true;
			}

			// Declared locally so a reader never has to jump to another file to see
			// what the type means.
			for (const alias of aliases) {
				if (hasBody) {
					source.push(' *');
				}
				source.push(` * @phpstan-type ${alias.name} ${alias.expansion}`);
				hasBody = true;
			}

			source.push(' */');
		}

		const extendsClause = phpClass.extends ? ` extends ${phpClass.extends}` : '';
		const implementsClause = isRoot ? ' implements ArrayDeserializable' : '';

		source.push(`class ${phpClass.name}${extendsClause}${implementsClause}`);
		source.push('{');

		if (isRoot) {
			source.push('    use FromArray;');
		}

		if (properties.length > 0) {
			if (isRoot) {
				source.push('');
			}

			source.push('    public function __construct(');
			properties.forEach((property, index) => {
				// A blank line keeps each property's docblock, attribute and
				// declaration readable as one unit.
				if (index > 0) {
					source.push('');
				}

				this.renderParameter(property, source);
			});
			source.push('    ) {');

			for (const property of properties) {
				// URIs are percent-decoded so the object holds the plain path.
				// The property cannot be `readonly` because of this assignment.
				if (property.special.includes('uri')) {
					source.push(`        $this->${property.name} = urldecode($${property.name});`);
				}
			}

			source.push('    }');
		}

		source.push('}');

		return source.join('\n');
	}

	private renderParameter(property: Property, source: string[]): void {
		const varType = needsVarAnnotation(property)
			? this.renderPropertyType(property) || 'mixed'
			: undefined;

		if (property.docs.length > 0 || varType !== undefined) {
			source.push('        /**');
			for (const doc of property.docs) {
				for (const line of doc.split('\n')) {
					source.push(`         * ${line}`);
				}
			}
			if (varType !== undefined) {
				if (property.docs.length > 0) {
					source.push('         *');
				}
				source.push(`         * @var ${varType}`);
			}
			source.push('         */');
		}

		for (const attribute of renderAttributes(property)) {
			source.push(`        ${attribute}`);
		}

		const nativeType =
			property.type.real === undefined
				? ''
				: property.nullable
					? `?${property.type.real} `
					: `${property.type.real} `;
		const defaultValue = property.nullable ? ' = null' : '';

		source.push(`        public ${nativeType}$${property.name}${defaultValue},`);
	}

	private renderPropertyType(property: Property): string {
		if (!property.type.documented.includes('null') && property.nullable) {
			return `${property.type.documented}|null`;
		}

		return property.type.documented;
	}
}
