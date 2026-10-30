<?php

namespace Phpactor\LanguageServerProtocol\Support;

use Attribute;

/**
 * Describes the data a constructor property accepts, as a tree of {@see Shape\Node}s.
 *
 * A node is either a class-string, meaning "an object of this class built with
 * fromArray()", or one of the classes in the {@see Shape} namespace:
 *
 *   TextEdit::class                  an object
 *   new Shape\Scalar('string')       a built-in type
 *   new Shape\Literal('full')        exactly this value
 *   new Shape\Sequence($node)        a list whose every element is $node
 *   new Shape\Map($key, $value)      an array of $value keyed by $key
 *   new Shape\Struct(['k' => $node]) an array with these keys, `k?` optional
 *   new Shape\Record()               an array whose contents are not described
 *   new Shape\Unknown()              any value at all, as in `LSPAny`
 *   new Shape\Union($node, ...)      the first branch that accepts the value
 *
 * The tree stops at `Record` wherever the protocol describes an anonymous
 * associative array: there is no class to hydrate there, so describing its keys
 * further would buy nothing.
 */
#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
final class Shape
{
    public function __construct(public readonly Shape\Node|string $node) {}
}
