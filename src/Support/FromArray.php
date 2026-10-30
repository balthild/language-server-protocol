<?php

namespace Phpactor\LanguageServerProtocol\Support;

use Exception;
use ReflectionClass;
use ReflectionParameter;
use RuntimeException;

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
        bool $allowUnknownKeys,
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
        bool $allowUnknownKeys,
    ): mixed {
        $attributes = $parameter->getAttributes(Deserialize::class);

        // Scalars, nulls and already-built objects are taken as they are.
        if ($attributes === [] || !is_array($value)) {
            return $value;
        }

        $deserialize = $attributes[0]->newInstance();

        if (!$deserialize->iterable) {
            return self::hydrate($deserialize->candidates, $value, $allowUnknownKeys) ?? $value;
        }

        return array_map(
            static fn (mixed $item): mixed => is_array($item)
                ? self::hydrate($deserialize->candidates, $item, $allowUnknownKeys) ?? $item
                : $item,
            $value,
        );
    }

    /**
     * @param list<class-string<ArrayDeserializable>> $candidates
     * @param array<string, mixed> $object
     */
    private static function hydrate(
        array $candidates,
        array $object,
        bool $allowUnknownKeys,
    ): ?object {
        $lastException = null;

        foreach ($candidates as $candidate) {
            try {
                return $candidate::fromArray($object, $allowUnknownKeys);
            } catch (Exception $exception) {
                $lastException = $exception;
            }
        }

        if ($lastException === null) {
            return null;
        }

        throw $lastException;
    }
}
