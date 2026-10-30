<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Alternative nodes; the first that accepts the value wins.
 */
final class Union implements Node
{
    /**
     * @var array<array-key, Node|string>
     */
    public readonly array $branches;

    public function __construct(Node|string ...$branches)
    {
        $this->branches = $branches;
    }
}
