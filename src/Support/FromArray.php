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
        $attributes = $parameter->getAttributes(Deserialize::class);

        // Scalars, nulls and already-built objects are taken as they are.
        if ($attributes === [] || !is_array($value)) {
            return $value;
        }

        /** @var array<string, Throwable> $failures */
        $failures = [];
        /** @var list<string> $hydrated */
        $hydrated = [];

        foreach ($attributes as $attribute) {
            $deserialize = $attribute->newInstance();
            $didHydrate = false;

            try {
                $value = self::hydrateAt(
                    $deserialize->at,
                    $deserialize->candidates,
                    $value,
                    $allowUnknownKeys,
                    $didHydrate,
                );
            } catch (Throwable $exception) {
                $failures[$deserialize->at] = $exception;
            }

            if ($didHydrate) {
                $hydrated[] = $deserialize->at;
            }
        }

        foreach ($failures as $path => $failure) {
            // Paths that nest inside one another describe the same slot: a
            // `Range | {insert, replace}` union is written as `editRange`,
            // `editRange.insert` and `editRange.replace`, and only one of them
            // can match. Unrelated paths are separate slots, so a failure there
            // is a real one.
            if (self::isSameSlot($path, $hydrated)) {
                continue;
            }

            throw $failure;
        }

        return $value;
    }

    /**
     * @param list<string> $hydrated
     */
    private static function isSameSlot(string $path, array $hydrated): bool
    {
        foreach ($hydrated as $other) {
            if (
                $path === $other ||
                $path === '' ||
                $other === '' ||
                str_starts_with($path, $other . '.') ||
                str_starts_with($other, $path . '.')
            ) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param list<class-string<ArrayDeserializable>> $candidates
     */
    private static function hydrateAt(
        string $path,
        array $candidates,
        mixed $value,
        bool $allowUnknownKeys,
        bool &$hydrated
    ): mixed {
        if ($path === '') {
            return self::hydrate($candidates, $value, $allowUnknownKeys, $hydrated);
        }

        if (!is_array($value)) {
            return $value;
        }

        return self::walk(explode('.', $path), $candidates, $value, $allowUnknownKeys, $hydrated);
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
        bool $allowUnknownKeys,
        bool &$hydrated
    ): array {
        $segment = array_shift($segments);

        if ($segment === '[]') {
            foreach ($value as $key => $item) {
                if (!is_array($item)) {
                    continue;
                }

                $value[$key] = $segments === []
                    ? self::hydrate($candidates, $item, $allowUnknownKeys, $hydrated)
                    : self::walk($segments, $candidates, $item, $allowUnknownKeys, $hydrated);
            }

            return $value;
        }

        // A missing or non-array location is not an error: it is how a union
        // branch announces that the data belongs to a different branch.
        if (!isset($value[$segment]) || !is_array($value[$segment])) {
            return $value;
        }

        $value[$segment] = $segments === []
            ? self::hydrate($candidates, $value[$segment], $allowUnknownKeys, $hydrated)
            : self::walk($segments, $candidates, $value[$segment], $allowUnknownKeys, $hydrated);

        return $value;
    }

    /**
     * Replaces a slot with the first candidate that accepts it.
     *
     * All candidates are alternative classes for one slot, so a slot that none
     * of them accepts is malformed and the last failure is rethrown. Callers that
     * merely probe a location catch that and try their next branch.
     *
     * A candidate that needs keys the data does not have raises
     * `ArgumentCountError`, which is an `Error` rather than an `Exception`.
     *
     * @param list<class-string<ArrayDeserializable>> $candidates
     */
    private static function hydrate(
        array $candidates,
        mixed $value,
        bool $allowUnknownKeys,
        bool &$hydrated
    ): mixed {
        if (!is_array($value)) {
            return $value;
        }

        $failure = null;

        foreach ($candidates as $candidate) {
            try {
                $object = $candidate::fromArray($value, $allowUnknownKeys);
                $hydrated = true;

                return $object;
            } catch (Throwable $exception) {
                $failure = $exception;
            }
        }

        throw $failure ?? new RuntimeException(sprintf(
            'Cannot deserialize %s into any of "%s"',
            json_encode($value),
            implode('", "', $candidates),
        ));
    }
}
