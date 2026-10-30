<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Capabilities specific to the notebook document support.
 */
class NotebookDocumentClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Capabilities specific to notebook document synchronization
         *
         * @var array{dynamicRegistration: bool, executionSummarySupport: bool}
         */
        public array $synchronization
    ) {}
}
