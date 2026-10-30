<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents an outgoing call, e.g. calling a getter from a method or a method from a constructor etc.
 */
class CallHierarchyOutgoingCall implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The item that is called.
         */
        #[Deserialize(CallHierarchyItem::class)]
        public CallHierarchyItem $to,
        /**
         * The range at which this item is called. This is the range relative to the caller, e.g the item
         * passed to [`provideCallHierarchyOutgoingCalls`](#CallHierarchyItemProvider.provideCallHierarchyOutgoingCalls)
         * and not [`this.to`](#CallHierarchyOutgoingCall.to).
         *
         * @var list<Range>
         */
        #[Deserialize(Range::class, at: '[]')]
        public array $fromRanges
    ) {}
}
