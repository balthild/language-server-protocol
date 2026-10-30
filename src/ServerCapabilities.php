<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $positionEncoding = null,
        /**
         * Defines how text documents are synced. Is either a detailed structure
         * defining each notification or for backwards compatibility the
         * TextDocumentSyncKind number.
         *
         * @var TextDocumentSyncOptions|TextDocumentSyncKind::*|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['class' => TextDocumentSyncOptions::class],
                        ['literal' => 0],
                        ['literal' => 1],
                        ['literal' => 2],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $textDocumentSync = null,
        /**
         * Defines how notebook documents are synced.
         *
         * @var NotebookDocumentSyncOptions|NotebookDocumentSyncRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['any' => null], ['class' => NotebookDocumentSyncRegistrationOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $notebookDocumentSync = null,
        /**
         * The server provides completion support.
         */
        #[Shape(['union' => [['class' => CompletionOptions::class], ['scalar' => 'null']]])]
        public ?CompletionOptions $completionProvider = null,
        /**
         * The server provides hover support.
         *
         * @var bool|HoverOptions|null
         */
        #[Shape([
            'union' => [['union' => [['scalar' => 'bool'], ['class' => HoverOptions::class]]], ['scalar' => 'null']],
        ])]
        public $hoverProvider = null,
        /**
         * The server provides signature help support.
         */
        #[Shape(['union' => [['class' => SignatureHelpOptions::class], ['scalar' => 'null']]])]
        public ?SignatureHelpOptions $signatureHelpProvider = null,
        /**
         * The server provides Goto Declaration support.
         *
         * @var bool|DeclarationOptions|DeclarationRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => DeclarationOptions::class],
                        ['class' => DeclarationRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $declarationProvider = null,
        /**
         * The server provides goto definition support.
         *
         * @var bool|DefinitionOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => DefinitionOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $definitionProvider = null,
        /**
         * The server provides Goto Type Definition support.
         *
         * @var bool|TypeDefinitionOptions|TypeDefinitionRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => TypeDefinitionOptions::class],
                        ['class' => TypeDefinitionRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $typeDefinitionProvider = null,
        /**
         * The server provides Goto Implementation support.
         *
         * @var bool|ImplementationOptions|ImplementationRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => ImplementationOptions::class],
                        ['class' => ImplementationRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $implementationProvider = null,
        /**
         * The server provides find references support.
         *
         * @var bool|ReferenceOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => ReferenceOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $referencesProvider = null,
        /**
         * The server provides document highlight support.
         *
         * @var bool|DocumentHighlightOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => DocumentHighlightOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $documentHighlightProvider = null,
        /**
         * The server provides document symbol support.
         *
         * @var bool|DocumentSymbolOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => DocumentSymbolOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $documentSymbolProvider = null,
        /**
         * The server provides code actions. CodeActionOptions may only be
         * specified if the client states that it supports
         * `codeActionLiteralSupport` in its initial `initialize` request.
         *
         * @var bool|CodeActionOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => CodeActionOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $codeActionProvider = null,
        /**
         * The server provides code lens.
         */
        #[Shape(['union' => [['class' => CodeLensOptions::class], ['scalar' => 'null']]])]
        public ?CodeLensOptions $codeLensProvider = null,
        /**
         * The server provides document link support.
         */
        #[Shape(['union' => [['class' => DocumentLinkOptions::class], ['scalar' => 'null']]])]
        public ?DocumentLinkOptions $documentLinkProvider = null,
        /**
         * The server provides color provider support.
         *
         * @var bool|DocumentColorOptions|DocumentColorRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => DocumentColorOptions::class],
                        ['class' => DocumentColorRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $colorProvider = null,
        /**
         * The server provides workspace symbol support.
         *
         * @var bool|WorkspaceSymbolOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => WorkspaceSymbolOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $workspaceSymbolProvider = null,
        /**
         * The server provides document formatting.
         *
         * @var bool|DocumentFormattingOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => DocumentFormattingOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $documentFormattingProvider = null,
        /**
         * The server provides document range formatting.
         *
         * @var bool|DocumentRangeFormattingOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'bool'], ['class' => DocumentRangeFormattingOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $documentRangeFormattingProvider = null,
        /**
         * The server provides document formatting on typing.
         */
        #[Shape(['union' => [['class' => DocumentOnTypeFormattingOptions::class], ['scalar' => 'null']]])]
        public ?DocumentOnTypeFormattingOptions $documentOnTypeFormattingProvider = null,
        /**
         * The server provides rename support. RenameOptions may only be
         * specified if the client states that it supports
         * `prepareSupport` in its initial `initialize` request.
         *
         * @var bool|RenameOptions|null
         */
        #[Shape([
            'union' => [['union' => [['scalar' => 'bool'], ['class' => RenameOptions::class]]], ['scalar' => 'null']],
        ])]
        public $renameProvider = null,
        /**
         * The server provides folding provider support.
         *
         * @var bool|FoldingRangeOptions|FoldingRangeRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => FoldingRangeOptions::class],
                        ['class' => FoldingRangeRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $foldingRangeProvider = null,
        /**
         * The server provides selection range support.
         *
         * @var bool|SelectionRangeOptions|SelectionRangeRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => SelectionRangeOptions::class],
                        ['class' => SelectionRangeRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $selectionRangeProvider = null,
        /**
         * The server provides execute command support.
         */
        #[Shape(['union' => [['class' => ExecuteCommandOptions::class], ['scalar' => 'null']]])]
        public ?ExecuteCommandOptions $executeCommandProvider = null,
        /**
         * The server provides call hierarchy support.
         *
         * @var bool|CallHierarchyOptions|CallHierarchyRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => CallHierarchyOptions::class],
                        ['class' => CallHierarchyRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $callHierarchyProvider = null,
        /**
         * The server provides linked editing range support.
         *
         * @var bool|LinkedEditingRangeOptions|LinkedEditingRangeRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => LinkedEditingRangeOptions::class],
                        ['class' => LinkedEditingRangeRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $linkedEditingRangeProvider = null,
        /**
         * The server provides semantic tokens support.
         *
         * @var SemanticTokensOptions|SemanticTokensRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['class' => SemanticTokensOptions::class],
                        ['class' => SemanticTokensRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $semanticTokensProvider = null,
        /**
         * The server provides moniker support.
         *
         * @var bool|MonikerOptions|MonikerRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => MonikerOptions::class],
                        ['class' => MonikerRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $monikerProvider = null,
        /**
         * The server provides type hierarchy support.
         *
         * @var bool|WorkDoneProgressOptions|TypeHierarchyRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => WorkDoneProgressOptions::class],
                        ['class' => TypeHierarchyRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $typeHierarchyProvider = null,
        /**
         * The server provides inline values.
         *
         * @var bool|WorkDoneProgressOptions|InlineValueRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => WorkDoneProgressOptions::class],
                        ['class' => InlineValueRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $inlineValueProvider = null,
        /**
         * The server provides inlay hints.
         *
         * @var bool|InlayHintOptions|InlayHintRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['scalar' => 'bool'],
                        ['class' => InlayHintOptions::class],
                        ['class' => InlayHintRegistrationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $inlayHintProvider = null,
        /**
         * The server has support for pull model diagnostics.
         *
         * @var DiagnosticOptions|DiagnosticRegistrationOptions|null
         */
        #[Shape([
            'union' => [
                ['union' => [['class' => DiagnosticOptions::class], ['class' => DiagnosticRegistrationOptions::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $diagnosticProvider = null,
        /**
         * Workspace specific server capabilities.
         *
         * @var array{workspaceFolders?: WorkspaceFoldersServerCapabilities, fileOperations?: FileOperationOptions}|null
         */
        #[Shape([
            'union' => [
                [
                    'shape' => [
                        'workspaceFolders?' => ['class' => WorkspaceFoldersServerCapabilities::class],
                        'fileOperations?' => ['class' => FileOperationOptions::class],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public ?array $workspace = null,
        /**
         * Experimental server capabilities.
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $experimental = null
    ) {}
}
