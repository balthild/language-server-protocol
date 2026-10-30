<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents programming constructs like functions or constructors in the context
 * of call hierarchy.
 */
class CallHierarchyItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The name of this item.
         */
        #[Shape(['scalar' => 'string'])]
        public string $name,
        /**
         * The kind of this item.
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
         * The resource identifier of this item.
         */
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        /**
         * The range enclosing this symbol not including leading/trailing whitespace but everything else, e.g. comments and code.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The range that should be selected and revealed when this symbol is being picked, e.g. the name of a function.
         * Must be contained by the [`range`](#CallHierarchyItem.range).
         */
        #[Shape(['class' => Range::class])]
        public Range $selectionRange,
        /**
         * Tags for this item.
         *
         * @var list<SymbolTag::*>|null
         */
        #[Shape(['union' => [['list' => ['literal' => 1]], ['scalar' => 'null']]])]
        public ?array $tags = null,
        /**
         * More detail for this item, e.g. the signature of a function.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $detail = null,
        /**
         * A data entry field that is preserved between a call hierarchy prepare and
         * incoming calls or outgoing calls requests.
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $data = null
    ) {
        $this->uri = urldecode($uri);
    }
}
