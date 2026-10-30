<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Text document specific client capabilities.
 *
 * @phpstan-type InlayHintClientCapabilities array{dynamicRegistration?: bool, resolveSupport?: array{properties: list<string>}}
 *
 * @phpstan-type DiagnosticClientCapabilities array{dynamicRegistration?: bool, relatedDocumentSupport?: bool}
 */
class TextDocumentClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Defines which synchronization capabilities the client supports.
         */
        #[Shape(new Shape\Union(TextDocumentSyncClientCapabilities::class, new Shape\Scalar('null')))]
        public ?TextDocumentSyncClientCapabilities $synchronization = null,

        /**
         * Capabilities specific to the `textDocument/completion` request.
         */
        #[Shape(new Shape\Union(CompletionClientCapabilities::class, new Shape\Scalar('null')))]
        public ?CompletionClientCapabilities $completion = null,

        /**
         * Capabilities specific to the `textDocument/hover` request.
         */
        #[Shape(new Shape\Union(HoverClientCapabilities::class, new Shape\Scalar('null')))]
        public ?HoverClientCapabilities $hover = null,

        /**
         * Capabilities specific to the `textDocument/signatureHelp` request.
         */
        #[Shape(new Shape\Union(SignatureHelpClientCapabilities::class, new Shape\Scalar('null')))]
        public ?SignatureHelpClientCapabilities $signatureHelp = null,

        /**
         * Capabilities specific to the `textDocument/declaration` request.
         */
        #[Shape(new Shape\Union(DeclarationClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DeclarationClientCapabilities $declaration = null,

        /**
         * Capabilities specific to the `textDocument/definition` request.
         */
        #[Shape(new Shape\Union(DefinitionClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DefinitionClientCapabilities $definition = null,

        /**
         * Capabilities specific to the `textDocument/typeDefinition` request.
         */
        #[Shape(new Shape\Union(TypeDefinitionClientCapabilities::class, new Shape\Scalar('null')))]
        public ?TypeDefinitionClientCapabilities $typeDefinition = null,

        /**
         * Capabilities specific to the `textDocument/implementation` request.
         */
        #[Shape(new Shape\Union(ImplementationClientCapabilities::class, new Shape\Scalar('null')))]
        public ?ImplementationClientCapabilities $implementation = null,

        /**
         * Capabilities specific to the `textDocument/references` request.
         */
        #[Shape(new Shape\Union(ReferenceClientCapabilities::class, new Shape\Scalar('null')))]
        public ?ReferenceClientCapabilities $references = null,

        /**
         * Capabilities specific to the `textDocument/documentHighlight` request.
         */
        #[Shape(new Shape\Union(DocumentHighlightClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentHighlightClientCapabilities $documentHighlight = null,

        /**
         * Capabilities specific to the `textDocument/documentSymbol` request.
         */
        #[Shape(new Shape\Union(DocumentSymbolClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentSymbolClientCapabilities $documentSymbol = null,

        /**
         * Capabilities specific to the `textDocument/codeAction` request.
         */
        #[Shape(new Shape\Union(CodeActionClientCapabilities::class, new Shape\Scalar('null')))]
        public ?CodeActionClientCapabilities $codeAction = null,

        /**
         * Capabilities specific to the `textDocument/codeLens` request.
         */
        #[Shape(new Shape\Union(CodeLensClientCapabilities::class, new Shape\Scalar('null')))]
        public ?CodeLensClientCapabilities $codeLens = null,

        /**
         * Capabilities specific to the `textDocument/documentLink` request.
         */
        #[Shape(new Shape\Union(DocumentLinkClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentLinkClientCapabilities $documentLink = null,

        /**
         * Capabilities specific to the `textDocument/documentColor` and the
         * `textDocument/colorPresentation` request.
         */
        #[Shape(new Shape\Union(DocumentColorClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentColorClientCapabilities $colorProvider = null,

        /**
         * Capabilities specific to the `textDocument/formatting` request.
         */
        #[Shape(new Shape\Union(DocumentFormattingClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentFormattingClientCapabilities $formatting = null,

        /**
         * Capabilities specific to the `textDocument/rangeFormatting` request.
         */
        #[Shape(new Shape\Union(DocumentRangeFormattingClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentRangeFormattingClientCapabilities $rangeFormatting = null,

        /**
         * Capabilities specific to the `textDocument/onTypeFormatting` request.
         */
        #[Shape(new Shape\Union(DocumentOnTypeFormattingClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DocumentOnTypeFormattingClientCapabilities $onTypeFormatting = null,

        /**
         * Capabilities specific to the `textDocument/rename` request.
         */
        #[Shape(new Shape\Union(RenameClientCapabilities::class, new Shape\Scalar('null')))]
        public ?RenameClientCapabilities $rename = null,

        /**
         * Capabilities specific to the `textDocument/foldingRange` request.
         */
        #[Shape(new Shape\Union(FoldingRangeClientCapabilities::class, new Shape\Scalar('null')))]
        public ?FoldingRangeClientCapabilities $foldingRange = null,

        /**
         * Capabilities specific to the `textDocument/selectionRange` request.
         */
        #[Shape(new Shape\Union(SelectionRangeClientCapabilities::class, new Shape\Scalar('null')))]
        public ?SelectionRangeClientCapabilities $selectionRange = null,

        /**
         * Capabilities specific to the `textDocument/publishDiagnostics` notification.
         */
        #[Shape(new Shape\Union(PublishDiagnosticsClientCapabilities::class, new Shape\Scalar('null')))]
        public ?PublishDiagnosticsClientCapabilities $publishDiagnostics = null,

        /**
         * Capabilities specific to the various call hierarchy requests.
         */
        #[Shape(new Shape\Union(CallHierarchyClientCapabilities::class, new Shape\Scalar('null')))]
        public ?CallHierarchyClientCapabilities $callHierarchy = null,

        /**
         * Capabilities specific to the various semantic token request.
         */
        #[Shape(new Shape\Union(SemanticTokensClientCapabilities::class, new Shape\Scalar('null')))]
        public ?SemanticTokensClientCapabilities $semanticTokens = null,

        /**
         * Capabilities specific to the `textDocument/linkedEditingRange` request.
         */
        #[Shape(new Shape\Union(LinkedEditingRangeClientCapabilities::class, new Shape\Scalar('null')))]
        public ?LinkedEditingRangeClientCapabilities $linkedEditingRange = null,

        /**
         * Client capabilities specific to the `textDocument/moniker` request.
         */
        #[Shape(new Shape\Union(MonikerClientCapabilities::class, new Shape\Scalar('null')))]
        public ?MonikerClientCapabilities $moniker = null,

        /**
         * Capabilities specific to the various type hierarchy requests.
         *
         * @var array{dynamicRegistration?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $typeHierarchy = null,

        /**
         * Capabilities specific to the `textDocument/inlineValue` request.
         *
         * @var array{dynamicRegistration?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $inlineValue = null,

        /**
         * Capabilities specific to the `textDocument/inlayHint` request.
         *
         * @var InlayHintClientCapabilities|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $inlayHint = null,

        /**
         * Capabilities specific to the diagnostic pull model.
         *
         * @var DiagnosticClientCapabilities|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $diagnostic = null
    ) {}
}
