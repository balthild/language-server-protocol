<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Defines the capabilities provided by a language
 * server.
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentSyncOptions array{notebookSelector: list<(array{notebook: string|NotebookDocumentFilter, cells?: list<array{language: string}>}|array{notebook?: string|NotebookDocumentFilter, cells: list<array{language: string}>})>, save?: bool}
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
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $positionEncoding = null,

        /**
         * Defines how text documents are synced. Is either a detailed structure
         * defining each notification or for backwards compatibility the
         * TextDocumentSyncKind number.
         *
         * @var TextDocumentSyncOptions|TextDocumentSyncKind::*|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    TextDocumentSyncOptions::class,
                    new Shape\Literal(0),
                    new Shape\Literal(1),
                    new Shape\Literal(2),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $textDocumentSync = null,

        /**
         * Defines how notebook documents are synced.
         *
         * @var NotebookDocumentSyncOptions|NotebookDocumentSyncRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Record(), NotebookDocumentSyncRegistrationOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $notebookDocumentSync = null,

        /**
         * The server provides completion support.
         */
        #[Shape(new Shape\Union(CompletionOptions::class, new Shape\Scalar('null')))]
        public ?CompletionOptions $completionProvider = null,

        /**
         * The server provides hover support.
         *
         * @var bool|HoverOptions|null
         */
        #[Shape(
            new Shape\Union(new Shape\Union(new Shape\Scalar('bool'), HoverOptions::class), new Shape\Scalar('null')),
        )]
        public $hoverProvider = null,

        /**
         * The server provides signature help support.
         */
        #[Shape(new Shape\Union(SignatureHelpOptions::class, new Shape\Scalar('null')))]
        public ?SignatureHelpOptions $signatureHelpProvider = null,

        /**
         * The server provides Goto Declaration support.
         *
         * @var bool|DeclarationOptions|DeclarationRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    DeclarationOptions::class,
                    DeclarationRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $declarationProvider = null,

        /**
         * The server provides goto definition support.
         *
         * @var bool|DefinitionOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), DefinitionOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $definitionProvider = null,

        /**
         * The server provides Goto Type Definition support.
         *
         * @var bool|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    TypeDefinitionOptions::class,
                    TypeDefinitionRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $typeDefinitionProvider = null,

        /**
         * The server provides Goto Implementation support.
         *
         * @var bool|ImplementationOptions|ImplementationRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    ImplementationOptions::class,
                    ImplementationRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $implementationProvider = null,

        /**
         * The server provides find references support.
         *
         * @var bool|ReferenceOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), ReferenceOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $referencesProvider = null,

        /**
         * The server provides document highlight support.
         *
         * @var bool|DocumentHighlightOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), DocumentHighlightOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentHighlightProvider = null,

        /**
         * The server provides document symbol support.
         *
         * @var bool|DocumentSymbolOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), DocumentSymbolOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentSymbolProvider = null,

        /**
         * The server provides code actions. CodeActionOptions may only be
         * specified if the client states that it supports
         * `codeActionLiteralSupport` in its initial `initialize` request.
         *
         * @var bool|CodeActionOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), CodeActionOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $codeActionProvider = null,

        /**
         * The server provides code lens.
         */
        #[Shape(new Shape\Union(CodeLensOptions::class, new Shape\Scalar('null')))]
        public ?CodeLensOptions $codeLensProvider = null,

        /**
         * The server provides document link support.
         */
        #[Shape(new Shape\Union(DocumentLinkOptions::class, new Shape\Scalar('null')))]
        public ?DocumentLinkOptions $documentLinkProvider = null,

        /**
         * The server provides color provider support.
         *
         * @var bool|DocumentColorOptions|DocumentColorRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    DocumentColorOptions::class,
                    DocumentColorRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $colorProvider = null,

        /**
         * The server provides workspace symbol support.
         *
         * @var bool|WorkspaceSymbolOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), WorkspaceSymbolOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $workspaceSymbolProvider = null,

        /**
         * The server provides document formatting.
         *
         * @var bool|DocumentFormattingOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), DocumentFormattingOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentFormattingProvider = null,

        /**
         * The server provides document range formatting.
         *
         * @var bool|DocumentRangeFormattingOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), DocumentRangeFormattingOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentRangeFormattingProvider = null,

        /**
         * The server provides document formatting on typing.
         */
        #[Shape(new Shape\Union(DocumentOnTypeFormattingOptions::class, new Shape\Scalar('null')))]
        public ?DocumentOnTypeFormattingOptions $documentOnTypeFormattingProvider = null,

        /**
         * The server provides rename support. RenameOptions may only be
         * specified if the client states that it supports
         * `prepareSupport` in its initial `initialize` request.
         *
         * @var bool|RenameOptions|null
         */
        #[Shape(
            new Shape\Union(new Shape\Union(new Shape\Scalar('bool'), RenameOptions::class), new Shape\Scalar('null')),
        )]
        public $renameProvider = null,

        /**
         * The server provides folding provider support.
         *
         * @var bool|FoldingRangeOptions|FoldingRangeRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    FoldingRangeOptions::class,
                    FoldingRangeRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $foldingRangeProvider = null,

        /**
         * The server provides selection range support.
         *
         * @var bool|SelectionRangeOptions|SelectionRangeRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    SelectionRangeOptions::class,
                    SelectionRangeRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $selectionRangeProvider = null,

        /**
         * The server provides execute command support.
         */
        #[Shape(new Shape\Union(ExecuteCommandOptions::class, new Shape\Scalar('null')))]
        public ?ExecuteCommandOptions $executeCommandProvider = null,

        /**
         * The server provides call hierarchy support.
         *
         * @var bool|CallHierarchyOptions|CallHierarchyRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    CallHierarchyOptions::class,
                    CallHierarchyRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $callHierarchyProvider = null,

        /**
         * The server provides linked editing range support.
         *
         * @var bool|LinkedEditingRangeOptions|LinkedEditingRangeRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    LinkedEditingRangeOptions::class,
                    LinkedEditingRangeRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $linkedEditingRangeProvider = null,

        /**
         * The server provides semantic tokens support.
         *
         * @var SemanticTokensOptions|SemanticTokensRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(SemanticTokensOptions::class, SemanticTokensRegistrationOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $semanticTokensProvider = null,

        /**
         * The server provides moniker support.
         *
         * @var bool|MonikerOptions|MonikerRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), MonikerOptions::class, MonikerRegistrationOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $monikerProvider = null,

        /**
         * The server provides type hierarchy support.
         *
         * @var bool|WorkDoneProgressOptions|TypeHierarchyRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    WorkDoneProgressOptions::class,
                    TypeHierarchyRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $typeHierarchyProvider = null,

        /**
         * The server provides inline values.
         *
         * @var bool|WorkDoneProgressOptions|InlineValueRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Scalar('bool'),
                    WorkDoneProgressOptions::class,
                    InlineValueRegistrationOptions::class,
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $inlineValueProvider = null,

        /**
         * The server provides inlay hints.
         *
         * @var bool|InlayHintOptions|InlayHintRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('bool'), InlayHintOptions::class, InlayHintRegistrationOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $inlayHintProvider = null,

        /**
         * The server has support for pull model diagnostics.
         *
         * @var DiagnosticOptions|DiagnosticRegistrationOptions|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(DiagnosticOptions::class, DiagnosticRegistrationOptions::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $diagnosticProvider = null,

        /**
         * Workspace specific server capabilities.
         *
         * @var array{workspaceFolders?: WorkspaceFoldersServerCapabilities, fileOperations?: FileOperationOptions}|null
         */
        #[Shape(new Shape\Union(new Shape\Struct([
            'workspaceFolders?' => WorkspaceFoldersServerCapabilities::class,
            'fileOperations?' => FileOperationOptions::class,
        ]), new Shape\Scalar('null')))]
        public ?array $workspace = null,

        /**
         * Experimental server capabilities.
         *
         * @var mixed|null
         */
        #[Shape(new Shape\Union(new Shape\Unknown(), new Shape\Scalar('null')))]
        public $experimental = null
    ) {}
}
