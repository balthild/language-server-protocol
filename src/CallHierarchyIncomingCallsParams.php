<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameter of a `callHierarchy/incomingCalls` request.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class CallHierarchyIncomingCallsParams extends WorkDoneProgressParams
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
