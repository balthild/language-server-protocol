<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents programming constructs like variables, classes, interfaces etc.
 * that appear in a document. Document symbols can be hierarchical and they
 * have two ranges: one that encloses its definition and one that points to
 * its most interesting range, e.g. the range of an identifier.
 */
class DocumentSymbol implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The name of this symbol. Will be displayed in the user interface and therefore must not be
         * an empty string or a string only consisting of white spaces.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $name,

        /**
         * The kind of this symbol.
         *
         * @var SymbolKind::*
         */
        #[Shape(
            new Shape\Union(
                new Shape\Literal(1),
                new Shape\Literal(2),
                new Shape\Literal(3),
                new Shape\Literal(4),
                new Shape\Literal(5),
                new Shape\Literal(6),
                new Shape\Literal(7),
                new Shape\Literal(8),
                new Shape\Literal(9),
                new Shape\Literal(10),
                new Shape\Literal(11),
                new Shape\Literal(12),
                new Shape\Literal(13),
                new Shape\Literal(14),
                new Shape\Literal(15),
                new Shape\Literal(16),
                new Shape\Literal(17),
                new Shape\Literal(18),
                new Shape\Literal(19),
                new Shape\Literal(20),
                new Shape\Literal(21),
                new Shape\Literal(22),
                new Shape\Literal(23),
                new Shape\Literal(24),
                new Shape\Literal(25),
                new Shape\Literal(26),
            ),
        )]
        public $kind,

        /**
         * The range enclosing this symbol not including leading/trailing whitespace but everything else
         * like comments. This information is typically used to determine if the clients cursor is
         * inside the symbol to reveal in the symbol in the UI.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * The range that should be selected and revealed when this symbol is being picked, e.g the name of a function.
         * Must be contained by the `range`.
         */
        #[Shape(Range::class)]
        public Range $selectionRange,

        /**
         * More detail for this symbol, e.g the signature of a function.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $detail = null,

        /**
         * Tags for this document symbol.
         *
         * @var list<SymbolTag::*>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Literal(1)), new Shape\Scalar('null')))]
        public ?array $tags = null,

        /**
         * Indicates if this symbol is deprecated.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $deprecated = null,

        /**
         * Children of this symbol, e.g. properties of a class.
         *
         * @var list<DocumentSymbol>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(DocumentSymbol::class), new Shape\Scalar('null')))]
        public ?array $children = null
    ) {}
}
