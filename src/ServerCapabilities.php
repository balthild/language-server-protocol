<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Defines the capabilities provided by a language
 * server.
 */
class ServerCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The position encoding the server picked from the encodings offered
         * by the client via the client capability `general.positionEncodings`.
         *
         * If the client didn't provide any position encodings the only valid
         * value that a server can return is 'utf-16'.
         *
         * If omitted it defaults to 'utf-16'.
         */
        public ?string $positionEncoding = null,
        /**
         * Defines how text documents are synced. Is either a detailed structure
         * defining each notification or for backwards compatibility the
         * TextDocumentSyncKind number.
         *
         * @var TextDocumentSyncOptions|TextDocumentSyncKind::*|null
         */
        #[Deserialize(TextDocumentSyncOptions::class)]
        public $textDocumentSync = null,
        /**
         * Defines how notebook documents are synced.
         *
         * @var mixed|mixed|null
         */
        public $notebookDocumentSync = null,
        /**
         * The server provides completion support.
         */
        #[Deserialize(CompletionOptions::class)]
        public ?CompletionOptions $completionProvider = null,
        /**
         * The server provides hover support.
         *
         * @var bool|HoverOptions|null
         */
        #[Deserialize(HoverOptions::class)]
        public $hoverProvider = null,
        /**
         * The server provides signature help support.
         */
        #[Deserialize(SignatureHelpOptions::class)]
        public ?SignatureHelpOptions $signatureHelpProvider = null,
        /**
         * The server provides Goto Declaration support.
         *
         * @var bool|DeclarationOptions|DeclarationRegistrationOptions|null
         */
        #[Deserialize([DeclarationOptions::class, DeclarationRegistrationOptions::class])]
        public $declarationProvider = null,
        /**
         * The server provides goto definition support.
         *
         * @var bool|DefinitionOptions|null
         */
        #[Deserialize(DefinitionOptions::class)]
        public $definitionProvider = null,
        /**
         * The server provides Goto Type Definition support.
         *
         * @var bool|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null
         */
        #[Deserialize([TypeDefinitionOptions::class, TypeDefinitionRegistrationOptions::class])]
        public $typeDefinitionProvider = null,
        /**
         * The server provides Goto Implementation support.
         *
         * @var bool|ImplementationOptions|ImplementationRegistrationOptions|null
         */
        #[Deserialize([ImplementationOptions::class, ImplementationRegistrationOptions::class])]
        public $implementationProvider = null,
        /**
         * The server provides find references support.
         *
         * @var bool|ReferenceOptions|null
         */
        #[Deserialize(ReferenceOptions::class)]
        public $referencesProvider = null,
        /**
         * The server provides document highlight support.
         *
         * @var bool|DocumentHighlightOptions|null
         */
        #[Deserialize(DocumentHighlightOptions::class)]
        public $documentHighlightProvider = null,
        /**
         * The server provides document symbol support.
         *
         * @var bool|DocumentSymbolOptions|null
         */
        #[Deserialize(DocumentSymbolOptions::class)]
        public $documentSymbolProvider = null,
        /**
         * The server provides code actions. CodeActionOptions may only be
         * specified if the client states that it supports
         * `codeActionLiteralSupport` in its initial `initialize` request.
         *
         * @var bool|CodeActionOptions|null
         */
        #[Deserialize(CodeActionOptions::class)]
        public $codeActionProvider = null,
        /**
         * The server provides code lens.
         */
        #[Deserialize(CodeLensOptions::class)]
        public ?CodeLensOptions $codeLensProvider = null,
        /**
         * The server provides document link support.
         */
        #[Deserialize(DocumentLinkOptions::class)]
        public ?DocumentLinkOptions $documentLinkProvider = null,
        /**
         * The server provides color provider support.
         *
         * @var bool|DocumentColorOptions|DocumentColorRegistrationOptions|null
         */
        #[Deserialize([DocumentColorOptions::class, DocumentColorRegistrationOptions::class])]
        public $colorProvider = null,
        /**
         * The server provides workspace symbol support.
         *
         * @var bool|WorkspaceSymbolOptions|null
         */
        #[Deserialize(WorkspaceSymbolOptions::class)]
        public $workspaceSymbolProvider = null,
        /**
         * The server provides document formatting.
         *
         * @var bool|DocumentFormattingOptions|null
         */
        #[Deserialize(DocumentFormattingOptions::class)]
        public $documentFormattingProvider = null,
        /**
         * The server provides document range formatting.
         *
         * @var bool|DocumentRangeFormattingOptions|null
         */
        #[Deserialize(DocumentRangeFormattingOptions::class)]
        public $documentRangeFormattingProvider = null,
        /**
         * The server provides document formatting on typing.
         */
        #[Deserialize(DocumentOnTypeFormattingOptions::class)]
        public ?DocumentOnTypeFormattingOptions $documentOnTypeFormattingProvider = null,
        /**
         * The server provides rename support. RenameOptions may only be
         * specified if the client states that it supports
         * `prepareSupport` in its initial `initialize` request.
         *
         * @var bool|RenameOptions|null
         */
        #[Deserialize(RenameOptions::class)]
        public $renameProvider = null,
        /**
         * The server provides folding provider support.
         *
         * @var bool|FoldingRangeOptions|FoldingRangeRegistrationOptions|null
         */
        #[Deserialize([FoldingRangeOptions::class, FoldingRangeRegistrationOptions::class])]
        public $foldingRangeProvider = null,
        /**
         * The server provides selection range support.
         *
         * @var bool|SelectionRangeOptions|SelectionRangeRegistrationOptions|null
         */
        #[Deserialize([SelectionRangeOptions::class, SelectionRangeRegistrationOptions::class])]
        public $selectionRangeProvider = null,
        /**
         * The server provides execute command support.
         */
        #[Deserialize(ExecuteCommandOptions::class)]
        public ?ExecuteCommandOptions $executeCommandProvider = null,
        /**
         * The server provides call hierarchy support.
         *
         * @var bool|CallHierarchyOptions|CallHierarchyRegistrationOptions|null
         */
        #[Deserialize([CallHierarchyOptions::class, CallHierarchyRegistrationOptions::class])]
        public $callHierarchyProvider = null,
        /**
         * The server provides linked editing range support.
         *
         * @var bool|mixed|mixed|null
         */
        public $linkedEditingRangeProvider = null,
        /**
         * The server provides semantic tokens support.
         *
         * @var mixed|mixed|null
         */
        public $semanticTokensProvider = null,
        /**
         * The server provides moniker support.
         *
         * @var bool|mixed|mixed|null
         */
        public $monikerProvider = null,
        /**
         * The server provides type hierarchy support.
         *
         * @var bool|mixed|mixed|null
         */
        public $typeHierarchyProvider = null,
        /**
         * The server provides inline values.
         *
         * @var bool|WorkDoneProgressOptions|InlineValueRegistrationOptions|null
         */
        #[Deserialize(InlineValueRegistrationOptions::class)]
        public $inlineValueProvider = null,
        /**
         * The server provides inlay hints.
         *
         * @var bool|InlayHintOptions|InlayHintRegistrationOptions|null
         */
        #[Deserialize([InlayHintOptions::class, InlayHintRegistrationOptions::class])]
        public $inlayHintProvider = null,
        /**
         * The server has support for pull model diagnostics.
         *
         * @var mixed|mixed|null
         */
        public $diagnosticProvider = null,
        /**
         * Workspace specific server capabilities.
         *
         * @var array{workspaceFolders: WorkspaceFoldersServerCapabilities, fileOperations: FileOperationOptions}|null
         */
        public ?array $workspace = null,
        /**
         * Experimental server capabilities.
         *
         * @var mixed|null
         */
        public $experimental = null
    ) {}
}
