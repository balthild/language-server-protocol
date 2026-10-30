<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * An array with known keys. A key ending in `?` is optional.
 *
 * Numeric keys describe a tuple; PHP stores them as ints, hence `array-key`.
 */
final class Struct implements Node
{
    /**
     * @param array<array-key, Node|string> $members
     */
    public function __construct(public readonly array $members) {}
}
