<?php

namespace Phpactor\LanguageServerProtocol\Support;

use Attribute;

/**
 * A slot inside the property value holds one of the given classes.
 *
 * The slot is addressed by a path: `''` (the default) is the value itself, `[]`
 * is every element of it, `a.b` is a nested key and `[].a` is a key of every
 * element. Repeating the attribute describes alternative interpretations of the
 * same value, which is how the protocol's union types are represented; they are
 * applied in declaration order and the first one that accepts a slot wins.
 */
#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY | Attribute::IS_REPEATABLE)]
final class Deserialize
{
    /**
     * @var list<class-string<ArrayDeserializable>>
     */
    public readonly array $candidates;

    /**
     * @param class-string<ArrayDeserializable>|list<class-string<ArrayDeserializable>> $candidates
     * @param string $at Path to the slot, relative to the property value
     */
    public function __construct(
        string|array $candidates,
        public readonly string $at = ''
    ) {
        $this->candidates = (array) $candidates;
    }
}
