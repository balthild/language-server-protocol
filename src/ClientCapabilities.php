<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['union' => [['class' => WorkspaceClientCapabilities::class], ['scalar' => 'null']]])]
        public ?WorkspaceClientCapabilities $workspace = null,
        /**
         * Text document specific client capabilities.
         */
        #[Shape(['union' => [['class' => TextDocumentClientCapabilities::class], ['scalar' => 'null']]])]
        public ?TextDocumentClientCapabilities $textDocument = null,
        /**
         * Capabilities specific to the notebook document support.
         */
        #[Shape(['union' => [['class' => NotebookDocumentClientCapabilities::class], ['scalar' => 'null']]])]
        public ?NotebookDocumentClientCapabilities $notebookDocument = null,
        /**
         * Window specific client capabilities.
         */
        #[Shape(['union' => [['class' => WindowClientCapabilities::class], ['scalar' => 'null']]])]
        public ?WindowClientCapabilities $window = null,
        /**
         * General client capabilities.
         */
        #[Shape(['union' => [['class' => GeneralClientCapabilities::class], ['scalar' => 'null']]])]
        public ?GeneralClientCapabilities $general = null,
        /**
         * Experimental client capabilities.
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $experimental = null
    ) {}
}
