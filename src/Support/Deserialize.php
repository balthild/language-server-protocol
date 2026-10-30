<?php

namespace Phpactor\LanguageServerProtocol\Support;

use Attribute;

/**
 * Tells {@see FromArray} how to rebuild a constructor property from array data.
 *
 * Candidates are tried in order and the first that accepts the data wins, which
 * is how the protocol's union types are represented.
 */
#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
final class Deserialize
{
    /**
     * @var list<class-string<ArrayDeserializable>>
     */
    public readonly array $candidates;

    /**
     * @param class-string<ArrayDeserializable>|list<class-string<ArrayDeserializable>> $candidates
     * @param bool $iterable Whether the value is a list of items rather than a single one
     */
    public function __construct(string|array $candidates, public readonly bool $iterable = false)
    {
        $this->candidates = (array) $candidates;
    }
}
