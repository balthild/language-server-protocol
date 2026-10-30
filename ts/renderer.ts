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
		const source = [
			'<?php // Auto-generated from vscode-languageserver-protocol (typescript)',
			'',
			'namespace Phpactor\\LanguageServerProtocol;',
			'',
			'use DTL\\Invoke\\Invoke;',
			'use Exception;',
			'use RuntimeException;',
			'',
		];

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

		source.push(`class ${phpClass.name}${extendsClause}`);
		source.push('{');

		this.buildProperties(phpClass, source);
		this.buildConstructorDefinition(phpClass, source);
		this.buildArrayConstructor(phpClass, source);

		source.push('}');

		return source.join('\n');
	}

	private buildProperties(declaration: PhpClass, source: string[]): void {
		for (const property of declaration.properties.values()) {
			source.push('    /**');
			for (const doc of property.docs) {
				for (const line of doc.split('\n')) {
					source.push(`     * ${line}`);
				}
			}
			source.push('     *');
			source.push(`     * @var ${this.renderPropertyType(property)}`);
			source.push('     */');
			source.push(`    public $${property.name};`);
			source.push('');
		}
	}

	private buildConstructorDefinition(declaration: PhpClass, source: string[]): void {
		const properties = [...declaration.properties.values()].sort(
			(property1, property2) => Number(property1.nullable) - Number(property2.nullable),
		);

		const args = properties.map((property) => {
			const arg: string[] = [];

			if (property.type.real) {
				if (property.nullable) {
					arg.push('?');
				}

				arg.push(`${property.type.real} `);
			}

			arg.push(`$${property.name}`);

			if (property.nullable) {
				arg.push(' = null');
			}

			return arg.join('');
		});

		if (args.length === 0) {
			return;
		}

		source.push('    /**');
		for (const property of declaration.properties.values()) {
			source.push(`     * @param ${this.renderPropertyType(property)} $${property.name}`);
		}
		source.push('     */');

		source.push(`    public function __construct(${args.join(', ')})`);
		source.push('    {');

		for (const property of declaration.properties.values()) {
			// URIs are decoded so that generated objects hold the plain path.
			if (property.special.includes('uri')) {
				source.push(`        $this->${property.name} = urldecode($${property.name});`);
				continue;
			}

			source.push(`        $this->${property.name} = $${property.name};`);
		}

		source.push('    }');
	}

	private renderPropertyType(property: Property): string {
		if (!property.type.documented.includes('null') && property.nullable) {
			return `${property.type.documented}|null`;
		}

		return property.type.documented;
	}

	private buildArrayConstructor(declaration: PhpClass, source: string[]): void {
		let normalizerSource = '';
		if (declaration.properties.size > 0) {
			normalizerSource = this.buildClassNormalizer(declaration).join('\n');
		}

		source.push(`
    /**
     * @param array<string,mixed> $array
     * @return self
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false)
    {
        ${normalizerSource}
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        `);
	}

	private buildClassNormalizer(declaration: PhpClass): string[] {
		const classResolutionSource = ['$map = ['];

		for (const property of declaration.properties.values()) {
			const classNames = property.type.classNames
				.map((name) => {
					return name + '::class';
				})
				.join(', ');

			classResolutionSource.push(
				`            '${property.name}' => ['names' => [${classNames}], 'iterable' => ${property.type.iterable ? 'true' : 'false'}],`,
			);
		}

		classResolutionSource.push('        ];');
		classResolutionSource.push(`
			foreach ($array as $key => &$value) {
					if (!isset($map[$key])) {
							if ($allowUnknownKeys) {
									unset($array[$key]);
									continue;
							}

							throw new RuntimeException(sprintf(
									'Parameter "%s" on class "%s" not known, known parameters: "%s"',
									$key,
									self::class,
									implode('", "', array_keys($map))
							));
					}

					// from here we only care about arrays that can be transformed into
					// objects
					if (!is_array($value)) {
							continue;
					}

					if (empty($map[$key]['names'])) {
							continue;
					}

					if ($map[$key]['iterable']) {
							$value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
									if (!is_array($object)) {
											return $object;
									}

									return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
							}, $value);
							continue;
					}

					$names = $map[$key]['names'];
					$value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
			}
			`);

		return classResolutionSource;
	}
}
