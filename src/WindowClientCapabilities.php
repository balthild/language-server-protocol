<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null,
        /**
         * Capabilities specific to the showMessage request.
         */
        #[Shape(['union' => [['class' => ShowMessageRequestClientCapabilities::class], ['scalar' => 'null']]])]
        public ?ShowMessageRequestClientCapabilities $showMessage = null,
        /**
         * Capabilities specific to the showDocument request.
         */
        #[Shape(['union' => [['class' => ShowDocumentClientCapabilities::class], ['scalar' => 'null']]])]
        public ?ShowDocumentClientCapabilities $showDocument = null
    ) {}
}
