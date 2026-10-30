<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $name,
        /**
         * The kind of this item.
         *
         * @var SymbolKind::*
         */
        public $kind,
        /**
         * The resource identifier of this item.
         */
        public string $uri,
        /**
         * The range enclosing this symbol not including leading/trailing whitespace but everything else, e.g. comments and code.
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * The range that should be selected and revealed when this symbol is being picked, e.g. the name of a function.
         * Must be contained by the [`range`](#CallHierarchyItem.range).
         */
        #[Deserialize(Range::class)]
        public Range $selectionRange,
        /**
         * Tags for this item.
         *
         * @var array<SymbolTag::*>|null
         */
        public ?array $tags = null,
        /**
         * More detail for this item, e.g. the signature of a function.
         */
        public ?string $detail = null,
        /**
         * A data entry field that is preserved between a call hierarchy prepare and
         * incoming calls or outgoing calls requests.
         *
         * @var mixed|null
         */
        public $data = null,
    ) {
        $this->uri = urldecode($uri);
    }
}