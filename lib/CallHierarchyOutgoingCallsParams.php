<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameter of a `callHierarchy/outgoingCalls` request.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.callHierarchy.d.ts
 */
class CallHierarchyOutgoingCallsParams extends WorkDoneProgressParams
{
    public function __construct(
        #[Shape(CallHierarchyItem::class)]
        public CallHierarchyItem $item,

        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $workDoneToken = null,

        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $partialResultToken = null
    ) {}
}
