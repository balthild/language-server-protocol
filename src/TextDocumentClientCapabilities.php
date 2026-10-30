<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        #[Deserialize(TextDocumentSyncClientCapabilities::class)]
        public ?TextDocumentSyncClientCapabilities $synchronization = null,
        /**
         * Capabilities specific to the `textDocument/completion` request.
         */
        #[Deserialize(CompletionClientCapabilities::class)]
        public ?CompletionClientCapabilities $completion = null,
        /**
         * Capabilities specific to the `textDocument/hover` request.
         */
        #[Deserialize(HoverClientCapabilities::class)]
        public ?HoverClientCapabilities $hover = null,
        /**
         * Capabilities specific to the `textDocument/signatureHelp` request.
         */
        #[Deserialize(SignatureHelpClientCapabilities::class)]
        public ?SignatureHelpClientCapabilities $signatureHelp = null,
        /**
         * Capabilities specific to the `textDocument/declaration` request.
         */
        #[Deserialize(DeclarationClientCapabilities::class)]
        public ?DeclarationClientCapabilities $declaration = null,
        /**
         * Capabilities specific to the `textDocument/definition` request.
         */
        #[Deserialize(DefinitionClientCapabilities::class)]
        public ?DefinitionClientCapabilities $definition = null,
        /**
         * Capabilities specific to the `textDocument/typeDefinition` request.
         */
        #[Deserialize(TypeDefinitionClientCapabilities::class)]
        public ?TypeDefinitionClientCapabilities $typeDefinition = null,
        /**
         * Capabilities specific to the `textDocument/implementation` request.
         */
        #[Deserialize(ImplementationClientCapabilities::class)]
        public ?ImplementationClientCapabilities $implementation = null,
        /**
         * Capabilities specific to the `textDocument/references` request.
         */
        #[Deserialize(ReferenceClientCapabilities::class)]
        public ?ReferenceClientCapabilities $references = null,
        /**
         * Capabilities specific to the `textDocument/documentHighlight` request.
         */
        #[Deserialize(DocumentHighlightClientCapabilities::class)]
        public ?DocumentHighlightClientCapabilities $documentHighlight = null,
        /**
         * Capabilities specific to the `textDocument/documentSymbol` request.
         */
        #[Deserialize(DocumentSymbolClientCapabilities::class)]
        public ?DocumentSymbolClientCapabilities $documentSymbol = null,
        /**
         * Capabilities specific to the `textDocument/codeAction` request.
         */
        #[Deserialize(CodeActionClientCapabilities::class)]
        public ?CodeActionClientCapabilities $codeAction = null,
        /**
         * Capabilities specific to the `textDocument/codeLens` request.
         */
        #[Deserialize(CodeLensClientCapabilities::class)]
        public ?CodeLensClientCapabilities $codeLens = null,
        /**
         * Capabilities specific to the `textDocument/documentLink` request.
         */
        #[Deserialize(DocumentLinkClientCapabilities::class)]
        public ?DocumentLinkClientCapabilities $documentLink = null,
        /**
         * Capabilities specific to the `textDocument/documentColor` and the
         * `textDocument/colorPresentation` request.
         */
        #[Deserialize(DocumentColorClientCapabilities::class)]
        public ?DocumentColorClientCapabilities $colorProvider = null,
        /**
         * Capabilities specific to the `textDocument/formatting` request.
         */
        #[Deserialize(DocumentFormattingClientCapabilities::class)]
        public ?DocumentFormattingClientCapabilities $formatting = null,
        /**
         * Capabilities specific to the `textDocument/rangeFormatting` request.
         */
        #[Deserialize(DocumentRangeFormattingClientCapabilities::class)]
        public ?DocumentRangeFormattingClientCapabilities $rangeFormatting = null,
        /**
         * Capabilities specific to the `textDocument/onTypeFormatting` request.
         */
        #[Deserialize(DocumentOnTypeFormattingClientCapabilities::class)]
        public ?DocumentOnTypeFormattingClientCapabilities $onTypeFormatting = null,
        /**
         * Capabilities specific to the `textDocument/rename` request.
         */
        #[Deserialize(RenameClientCapabilities::class)]
        public ?RenameClientCapabilities $rename = null,
        /**
         * Capabilities specific to the `textDocument/foldingRange` request.
         */
        #[Deserialize(FoldingRangeClientCapabilities::class)]
        public ?FoldingRangeClientCapabilities $foldingRange = null,
        /**
         * Capabilities specific to the `textDocument/selectionRange` request.
         */
        #[Deserialize(SelectionRangeClientCapabilities::class)]
        public ?SelectionRangeClientCapabilities $selectionRange = null,
        /**
         * Capabilities specific to the `textDocument/publishDiagnostics` notification.
         */
        #[Deserialize(PublishDiagnosticsClientCapabilities::class)]
        public ?PublishDiagnosticsClientCapabilities $publishDiagnostics = null,
        /**
         * Capabilities specific to the various call hierarchy requests.
         */
        #[Deserialize(CallHierarchyClientCapabilities::class)]
        public ?CallHierarchyClientCapabilities $callHierarchy = null,
        /**
         * Capabilities specific to the various semantic token request.
         */
        #[Deserialize(SemanticTokensClientCapabilities::class)]
        public ?SemanticTokensClientCapabilities $semanticTokens = null,
        /**
         * Capabilities specific to the `textDocument/linkedEditingRange` request.
         */
        #[Deserialize(LinkedEditingRangeClientCapabilities::class)]
        public ?LinkedEditingRangeClientCapabilities $linkedEditingRange = null,
        /**
         * Client capabilities specific to the `textDocument/moniker` request.
         */
        #[Deserialize(MonikerClientCapabilities::class)]
        public ?MonikerClientCapabilities $moniker = null,
        /**
         * Capabilities specific to the various type hierarchy requests.
         *
         * @var array{dynamicRegistration?: bool}|null
         */
        public ?array $typeHierarchy = null,
        /**
         * Capabilities specific to the `textDocument/inlineValue` request.
         *
         * @var array{dynamicRegistration?: bool}|null
         */
        public ?array $inlineValue = null,
        /**
         * Capabilities specific to the `textDocument/inlayHint` request.
         *
         * @var InlayHintClientCapabilities|null
         */
        public ?array $inlayHint = null,
        /**
         * Capabilities specific to the diagnostic pull model.
         *
         * @var DiagnosticClientCapabilities|null
         */
        public ?array $diagnostic = null
    ) {}
}
