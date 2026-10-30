<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $name,
        /**
         * The kind of this symbol.
         *
         * @var SymbolKind::*
         */
        public $kind,
        /**
         * The range enclosing this symbol not including leading/trailing whitespace but everything else
         * like comments. This information is typically used to determine if the clients cursor is
         * inside the symbol to reveal in the symbol in the UI.
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * The range that should be selected and revealed when this symbol is being picked, e.g the name of a function.
         * Must be contained by the `range`.
         */
        #[Deserialize(Range::class)]
        public Range $selectionRange,
        /**
         * More detail for this symbol, e.g the signature of a function.
         */
        public ?string $detail = null,
        /**
         * Tags for this document symbol.
         *
         * @var array<SymbolTag::*>|null
         */
        public ?array $tags = null,
        /**
         * Indicates if this symbol is deprecated.
         */
        public ?bool $deprecated = null,
        /**
         * Children of this symbol, e.g. properties of a class.
         *
         * @var array<DocumentSymbol>|null
         */
        #[Deserialize(DocumentSymbol::class, iterable: true)]
        public ?array $children = null
    ) {}
}
