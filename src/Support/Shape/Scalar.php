<?php

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A value of a built-in PHP type.
 *
 * `mixed` is not one of them: it accepts arrays and objects too, so it has its
 * own node, {@see Unknown}.
 */
final class Scalar implements Node
{
    /**
     * @param 'string'|'int'|'bool'|'float'|'null' $name
     */
    public function __construct(public readonly string $name) {}
}
