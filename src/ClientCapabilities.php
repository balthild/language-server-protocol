<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Defines the capabilities provided by the client.
 */
class ClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Workspace specific client capabilities.
         */
        #[Deserialize(WorkspaceClientCapabilities::class)]
        public ?WorkspaceClientCapabilities $workspace = null,
        /**
         * Text document specific client capabilities.
         */
        #[Deserialize(TextDocumentClientCapabilities::class)]
        public ?TextDocumentClientCapabilities $textDocument = null,
        /**
         * Capabilities specific to the notebook document support.
         */
        #[Deserialize(NotebookDocumentClientCapabilities::class)]
        public ?NotebookDocumentClientCapabilities $notebookDocument = null,
        /**
         * Window specific client capabilities.
         */
        #[Deserialize(WindowClientCapabilities::class)]
        public ?WindowClientCapabilities $window = null,
        /**
         * General client capabilities.
         */
        #[Deserialize(GeneralClientCapabilities::class)]
        public ?GeneralClientCapabilities $general = null,
        /**
         * Experimental client capabilities.
         *
         * @var mixed|null
         */
        public $experimental = null
    ) {}
}
