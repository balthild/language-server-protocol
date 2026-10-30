<?php

namespace Phpactor\LanguageServerProtocol\Support;

use Attribute;

/**
 * Describes the data a constructor property accepts, as a tree of type nodes.
 *
 * A node is a single-key array; the key names the kind:
 *
 *   ['class'   => 'Fqcn']              an object, hydrated via Fqcn::fromArray()
 *   ['scalar'  => 'string']            string, int, bool, float, mixed or null
 *   ['literal' => 'full']              exactly this value
 *   ['list'    => $node]               a list whose every element is $node
 *   ['map'     => [$key, $value]]      an array of $value keyed by $key
 *   ['shape'   => ['k' => $node]]      an array with these keys; `k?` is optional
 *   ['any'     => null]                any array, described no further
 *   ['union'   => [$node, ...]]        the first branch that accepts the value
 *
 * The tree stops at `any` wherever the protocol describes an anonymous
 * associative array: there is no class to hydrate there, so describing its keys
 * further would buy nothing.
 */
#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
final class Shape
{
    /**
     * @param array<string, mixed> $node
     */
    public function __construct(public readonly array $node) {}
}
