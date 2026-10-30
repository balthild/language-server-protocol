<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A range in a text document expressed as (zero-based) start and end positions.
 *
 * If you want to specify a range that contains a line including the line ending
 * character(s) then use an end position denoting the start of the next line.
 * For example:
 * ```ts
 * {
 *     start: { line: 5, character: 23 }
 *     end : { line 6, character : 0 }
 * }
 * ```
 */
class Range implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range's start position.
         */
        #[Shape(['class' => Position::class])]
        public Position $start,
        /**
         * The range's end position.
         */
        #[Shape(['class' => Position::class])]
        public Position $end
    ) {}
}
