<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A value of a built-in PHP type.
 */
final class Scalar implements Node
{
    /**
     * @param 'string'|'int'|'bool'|'float'|'mixed'|'null' $name
     */
    public function __construct(public readonly string $name) {}
}
