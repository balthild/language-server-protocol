<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A selection range represents a part of a selection hierarchy. A selection range
 * may have a parent selection range that contains it.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class SelectionRange implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The [range](#Range) of this selection range.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * The parent selection range containing this range. Therefore `parent.range` must contain `this.range`.
         */
        #[Shape(new Shape\Union(SelectionRange::class, new Shape\Scalar('null')))]
        public ?SelectionRange $parent = null
    ) {}
}
