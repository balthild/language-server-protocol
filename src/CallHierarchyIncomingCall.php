<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents an incoming call, e.g. a caller of a method or constructor.
 */
class CallHierarchyIncomingCall implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The item that makes the call.
         */
        #[Deserialize(CallHierarchyItem::class)]
        public CallHierarchyItem $from,
        /**
         * The ranges at which the calls appear. This is relative to the caller
         * denoted by [`this.from`](#CallHierarchyIncomingCall.from).
         *
         * @var array<Range>
         */
        #[Deserialize(Range::class, iterable: true)]
        public array $fromRanges,
    ) {
    }
}