<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public ?bool $workDoneProgress = null,
        /**
         * Capabilities specific to the showMessage request.
         */
        #[Deserialize(ShowMessageRequestClientCapabilities::class)]
        public ?ShowMessageRequestClientCapabilities $showMessage = null,
        /**
         * Capabilities specific to the showDocument request.
         */
        #[Deserialize(ShowDocumentClientCapabilities::class)]
        public ?ShowDocumentClientCapabilities $showDocument = null
    ) {}
}
