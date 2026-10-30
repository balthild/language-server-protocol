<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * An array whose keys are described by one node and whose values by another.
 */
final class Map implements Node
{
    public function __construct(
        public readonly Node|string $key,
        public readonly Node|string $value
    ) {}
}
