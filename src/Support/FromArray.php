<?php

namespace Phpactor\LanguageServerProtocol\Support;

use ReflectionClass;
use ReflectionParameter;
use RuntimeException;
use Throwable;

/**
 * Provides {@see ArrayDeserializable::fromArray()} driven by the
 * {@see Deserialize} attributes of the constructor properties.
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
        foreach ($parameter->getAttributes(Deserialize::class) as $attribute) {
            $deserialize = $attribute->newInstance();

            $value = self::hydrateAt(
                $deserialize->at,
                $deserialize->candidates,
                $value,
                $allowUnknownKeys,
            );
        }

        return $value;
    }

    /**
     * @param list<class-string<ArrayDeserializable>> $candidates
     */
    private static function hydrateAt(
        string $path,
        array $candidates,
        mixed $value,
        bool $allowUnknownKeys
    ): mixed {
        if ($path === '') {
            return self::hydrate($candidates, $value, $allowUnknownKeys);
        }

        if (!is_array($value)) {
            return $value;
        }

        return self::walk(explode('.', $path), $candidates, $value, $allowUnknownKeys);
    }

    /**
     * @param list<string> $segments
     * @param list<class-string<ArrayDeserializable>> $candidates
     * @param array<array-key, mixed> $value
     * @return array<array-key, mixed>
     */
    private static function walk(
        array $segments,
        array $candidates,
        array $value,
        bool $allowUnknownKeys
    ): array {
        $segment = array_shift($segments);

        if ($segment === '[]') {
            foreach ($value as $key => $item) {
                if (!is_array($item)) {
                    continue;
                }

                $value[$key] = $segments === []
                    ? self::hydrate($candidates, $item, $allowUnknownKeys)
                    : self::walk($segments, $candidates, $item, $allowUnknownKeys);
            }

            return $value;
        }

        if (!isset($value[$segment]) || !is_array($value[$segment])) {
            return $value;
        }

        $value[$segment] = $segments === []
            ? self::hydrate($candidates, $value[$segment], $allowUnknownKeys)
            : self::walk($segments, $candidates, $value[$segment], $allowUnknownKeys);

        return $value;
    }

    /**
     * Replaces a slot with the first candidate that accepts it.
     *
     * Failure is tolerated and the slot is left untouched. A slot may describe
     * only one branch of a union (`editRange` is either a `Range` or an object
     * holding `insert` and `replace`), and a candidate that needs keys the data
     * does not have raises `ArgumentCountError` — an `Error`, not an
     * `Exception` — so this has to catch `Throwable` and move on.
     *
     * @param list<class-string<ArrayDeserializable>> $candidates
     */
    private static function hydrate(
        array $candidates,
        mixed $value,
        bool $allowUnknownKeys
    ): mixed {
        if (!is_array($value)) {
            return $value;
        }

        foreach ($candidates as $candidate) {
            try {
                return $candidate::fromArray($value, $allowUnknownKeys);
            } catch (Throwable) {
                continue;
            }
        }

        return $value;
    }
}
