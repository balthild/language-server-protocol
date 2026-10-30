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
        #[Shape(new Shape\Union(WorkspaceClientCapabilities::class, new Shape\Scalar('null')))]
        public ?WorkspaceClientCapabilities $workspace = null,
        /**
         * Text document specific client capabilities.
         */
        #[Shape(new Shape\Union(TextDocumentClientCapabilities::class, new Shape\Scalar('null')))]
        public ?TextDocumentClientCapabilities $textDocument = null,
        /**
         * Capabilities specific to the notebook document support.
         */
        #[Shape(new Shape\Union(NotebookDocumentClientCapabilities::class, new Shape\Scalar('null')))]
        public ?NotebookDocumentClientCapabilities $notebookDocument = null,
        /**
         * Window specific client capabilities.
         */
        #[Shape(new Shape\Union(WindowClientCapabilities::class, new Shape\Scalar('null')))]
        public ?WindowClientCapabilities $window = null,
        /**
         * General client capabilities.
         */
        #[Shape(new Shape\Union(GeneralClientCapabilities::class, new Shape\Scalar('null')))]
        public ?GeneralClientCapabilities $general = null,
        /**
         * Experimental client capabilities.
         *
         * @var mixed|null
         */
        #[Shape(new Shape\Union(new Shape\Scalar('mixed'), new Shape\Scalar('null')))]
        public $experimental = null
    ) {}
}
