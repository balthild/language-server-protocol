<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A document highlight is a range inside a text document which deserves
 * special attention. Usually a document highlight is visualized by changing
 * the background color of its range.
 */
class DocumentHighlight implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range this highlight applies to.
         */
        #[Shape(Range::class)]
        public Range $range,
        /**
         * The highlight kind, default is [text](#DocumentHighlightKind.Text).
         *
         * @var DocumentHighlightKind::*|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Literal(1), new Shape\Literal(2), new Shape\Literal(3)),
                new Shape\Scalar('null'),
            ),
        )]
        public $kind = null
    ) {}
}
