<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents an incoming call, e.g. a caller of a method or constructor.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class CallHierarchyIncomingCall implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The item that makes the call.
         */
        #[Shape(CallHierarchyItem::class)]
        public CallHierarchyItem $from,

        /**
         * The ranges at which the calls appear. This is relative to the caller
         * denoted by [`this.from`](#CallHierarchyIncomingCall.from).
         *
         * @var list<Range>
         */
        #[Shape(new Shape\Sequence(Range::class))]
        public array $fromRanges
    ) {}
}
