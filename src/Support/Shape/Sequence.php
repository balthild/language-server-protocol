<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A dense list whose every element matches the same node.
 */
final class Sequence implements Node
{
    public function __construct(public readonly Node|string $element) {}
}
