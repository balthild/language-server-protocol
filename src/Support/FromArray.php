<?php

namespace Phpactor\LanguageServerProtocol\Support;

use ReflectionClass;
use ReflectionParameter;
use RuntimeException;
use Throwable;

/**
 * Provides {@see ArrayDeserializable::fromArray()} driven by the {@see Shape}
 * attributes of the constructor properties.
 */
trait FromArray
{
    /**
     * @param array<string, mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): static
    {
        $parameters = (new ReflectionClass(static::class))->getConstructor()?->getParameters() ?? [];

        self::assertKnownKeys($parameters, $array, $allowUnknownKeys);

        $arguments = [];
        foreach ($parameters as $parameter) {
            $name = $parameter->getName();

            if (array_key_exists($name, $array)) {
                $arguments[$name] = self::coerce($parameter, $array[$name], $allowUnknownKeys);
            }
        }

        // The arguments are derived from the constructor of `static::class`
        // itself, so this cannot pick a constructor that does not accept them.
        // @phpstan-ignore new.static
        return new static(...$arguments);
    }

    /**
     * @param list<ReflectionParameter> $parameters
     * @param array<string, mixed> $array
     */
    private static function assertKnownKeys(
        array $parameters,
        array $array,
        bool $allowUnknownKeys
    ): void {
        $known = array_map(
            static fn (ReflectionParameter $parameter): string => $parameter->getName(),
            $parameters,
        );

        foreach (array_keys($array) as $key) {
            if ($allowUnknownKeys || in_array($key, $known, true)) {
                continue;
            }

            throw new RuntimeException(sprintf(
                'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                $key,
                static::class,
                implode('", "', $known),
            ));
        }
    }

    private static function coerce(
        ReflectionParameter $parameter,
        mixed $value,
        bool $allowUnknownKeys
    ): mixed {
        $attributes = $parameter->getAttributes(Shape::class);

        if ($attributes === []) {
            return $value;
        }

        return self::conform($attributes[0]->newInstance()->node, $value, $allowUnknownKeys);
    }

    /**
     * Returns the value as described by the node, hydrating objects on the way,
     * or throws when the value does not fit.
     *
     * @param array<string, mixed> $node
     */
    private static function conform(array $node, mixed $value, bool $allowUnknownKeys): mixed
    {
        $kind = array_key_first($node);

        return match ($kind) {
            'any' => $value,
            'class' => self::conformClass($node['class'], $value, $allowUnknownKeys),
            'scalar' => self::conformScalar($node['scalar'], $value),
            'literal' => self::conformLiteral($node['literal'], $value),
            'list' => self::conformList($node['list'], $value, $allowUnknownKeys),
            'map' => self::conformMap($node['map'], $value, $allowUnknownKeys),
            'shape' => self::conformShape($node['shape'], $value, $allowUnknownKeys),
            'union' => self::conformUnion($node['union'], $value, $allowUnknownKeys),
            default => throw new RuntimeException(sprintf('Unknown shape node "%s"', $kind)),
        };
    }

    /**
     * @param class-string<ArrayDeserializable> $class
     */
    private static function conformClass(string $class, mixed $value, bool $allowUnknownKeys): object
    {
        if ($value instanceof $class) {
            return $value;
        }

        if (!is_array($value)) {
            throw self::mismatch($class, $value);
        }

        return $class::fromArray($value, $allowUnknownKeys);
    }

    private static function conformScalar(string $scalar, mixed $value): mixed
    {
        $matches = match ($scalar) {
            'mixed' => true,
            'null' => $value === null,
            'string' => is_string($value),
            'int' => is_int($value),
            'bool' => is_bool($value),
            'float' => is_float($value) || is_int($value),
            default => throw new RuntimeException(sprintf('Unknown scalar "%s"', $scalar)),
        };

        if (!$matches) {
            throw self::mismatch($scalar, $value);
        }

        return $value;
    }

    private static function conformLiteral(string|int|bool $literal, mixed $value): mixed
    {
        if ($value !== $literal) {
            throw self::mismatch(var_export($literal, true), $value);
        }

        return $value;
    }

    /**
     * @param array<string, mixed> $element
     * @return array<array-key, mixed>
     */
    private static function conformList(array $element, mixed $value, bool $allowUnknownKeys): array
    {
        if (!is_array($value) || !array_is_list($value)) {
            throw self::mismatch('list', $value);
        }

        foreach ($value as $index => $item) {
            $value[$index] = self::conform($element, $item, $allowUnknownKeys);
        }

        return $value;
    }

    /**
     * @param array{0: array<string, mixed>, 1: array<string, mixed>} $types
     * @return array<array-key, mixed>
     */
    private static function conformMap(array $types, mixed $value, bool $allowUnknownKeys): array
    {
        if (!is_array($value)) {
            throw self::mismatch('map', $value);
        }

        [$keyNode, $valueNode] = $types;

        foreach ($value as $key => $item) {
            self::conform($keyNode, $key, $allowUnknownKeys);
            $value[$key] = self::conform($valueNode, $item, $allowUnknownKeys);
        }

        return $value;
    }

    /**
     * @param array<string, array<string, mixed>> $members
     * @return array<array-key, mixed>
     */
    private static function conformShape(array $members, mixed $value, bool $allowUnknownKeys): array
    {
        if (!is_array($value)) {
            throw self::mismatch('array', $value);
        }

        foreach ($members as $key => $node) {
            $optional = str_ends_with($key, '?');
            $name = $optional ? substr($key, 0, -1) : $key;

            if (!array_key_exists($name, $value)) {
                if ($optional) {
                    continue;
                }

                throw new RuntimeException(sprintf('Missing key "%s"', $name));
            }

            $value[$name] = self::conform($node, $value[$name], $allowUnknownKeys);
        }

        return $value;
    }

    /**
     * @param list<array<string, mixed>> $branches
     */
    private static function conformUnion(array $branches, mixed $value, bool $allowUnknownKeys): mixed
    {
        $failure = null;

        foreach ($branches as $branch) {
            try {
                return self::conform($branch, $value, $allowUnknownKeys);
            } catch (Throwable $exception) {
                $failure = $exception;
            }
        }

        throw $failure ?? new RuntimeException('Empty union');
    }

    private static function mismatch(string $expected, mixed $value): RuntimeException
    {
        return new RuntimeException(sprintf(
            'Expected %s, got %s',
            $expected,
            get_debug_type($value),
        ));
    }
}
