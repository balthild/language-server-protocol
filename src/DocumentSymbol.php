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
        #[Shape(['scalar' => 'string'])]
        public string $name,
        /**
         * The kind of this symbol.
         *
         * @var SymbolKind::*
         */
        #[Shape([
            'union' => [
                ['literal' => 1],
                ['literal' => 2],
                ['literal' => 3],
                ['literal' => 4],
                ['literal' => 5],
                ['literal' => 6],
                ['literal' => 7],
                ['literal' => 8],
                ['literal' => 9],
                ['literal' => 10],
                ['literal' => 11],
                ['literal' => 12],
                ['literal' => 13],
                ['literal' => 14],
                ['literal' => 15],
                ['literal' => 16],
                ['literal' => 17],
                ['literal' => 18],
                ['literal' => 19],
                ['literal' => 20],
                ['literal' => 21],
                ['literal' => 22],
                ['literal' => 23],
                ['literal' => 24],
                ['literal' => 25],
                ['literal' => 26],
            ],
        ])]
        public $kind,
        /**
         * The range enclosing this symbol not including leading/trailing whitespace but everything else
         * like comments. This information is typically used to determine if the clients cursor is
         * inside the symbol to reveal in the symbol in the UI.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The range that should be selected and revealed when this symbol is being picked, e.g the name of a function.
         * Must be contained by the `range`.
         */
        #[Shape(['class' => Range::class])]
        public Range $selectionRange,
        /**
         * More detail for this symbol, e.g the signature of a function.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $detail = null,
        /**
         * Tags for this document symbol.
         *
         * @var list<SymbolTag::*>|null
         */
        #[Shape(['union' => [['list' => ['literal' => 1]], ['scalar' => 'null']]])]
        public ?array $tags = null,
        /**
         * Indicates if this symbol is deprecated.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $deprecated = null,
        /**
         * Children of this symbol, e.g. properties of a class.
         *
         * @var list<DocumentSymbol>|null
         */
        #[Shape(['union' => [['list' => ['class' => DocumentSymbol::class]], ['scalar' => 'null']]])]
        public ?array $children = null
    ) {}
}
