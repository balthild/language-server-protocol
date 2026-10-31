<?php

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol\Support;

/**
 * A protocol value object that can be built from the decoded JSON representation.
 */
interface ArrayDeserializable
{
    /**
     * @param array<string, mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): static;
}
