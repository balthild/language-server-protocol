<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class WindowClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * It indicates whether the client supports server initiated
         * progress using the `window/workDoneProgress/create` request.
         *
         * The capability also controls Whether client supports handling
         * of progress notifications. If set servers are allowed to report a
         * `workDoneProgress` property in the request specific server
         * capabilities.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null,

        /**
         * Capabilities specific to the showMessage request.
         */
        #[Shape(new Shape\Union(ShowMessageRequestClientCapabilities::class, new Shape\Scalar('null')))]
        public ?ShowMessageRequestClientCapabilities $showMessage = null,

        /**
         * Capabilities specific to the showDocument request.
         */
        #[Shape(new Shape\Union(ShowDocumentClientCapabilities::class, new Shape\Scalar('null')))]
        public ?ShowDocumentClientCapabilities $showDocument = null
    ) {}
}
