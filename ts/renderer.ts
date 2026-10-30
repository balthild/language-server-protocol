import { constantCase } from 'change-case';

import { PhpClass, PhpClassLike, PhpInterface } from './phpClass.ts';
import type { PhpConstant, Property } from './phpClass.ts';

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

function renderAttributes(property: Property): string[] {
	const classNames = property.type.classNames;

	if (classNames.length === 0) {
		return [];
	}

	const candidates =
		classNames.length === 1
			? `${classNames[0]}::class`
			: `[${classNames.map((name) => `${name}::class`).join(', ')}]`;
	const iterable = property.type.iterable ? ', iterable: true' : '';

	return [`#[Deserialize(${candidates}${iterable})]`];
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
		const usesDeserialize = properties.some((property) => property.type.classNames.length > 0);

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
		if (usesDeserialize) {
			imports.push('Deserialize');
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

		if (phpClass.mixins.length > 0 || phpClass.docs.length > 0) {
			source.push('/**');
			for (const doc of phpClass.docs) {
				for (const line of doc.split('\n')) {
					source.push(` * ${line}`);
				}
			}
			if (phpClass.mixins.length > 0 && phpClass.docs.length > 0) {
				source.push(' *');
			}
			if (phpClass.mixins.length > 0) {
				source.push(` * Mixins (implemented TS interfaces): ${phpClass.mixins.join(', ')}`);
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
			for (const property of properties) {
				this.renderParameter(property, source);
			}
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
