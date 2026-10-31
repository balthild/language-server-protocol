<?php

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Exactly one value, as in a string literal union.
 */
final class Literal implements Node
{
    public function __construct(public readonly string|int|bool $value) {}
}
