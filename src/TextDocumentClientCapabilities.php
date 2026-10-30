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
        #[Shape(['union' => [['class' => TextDocumentSyncClientCapabilities::class], ['scalar' => 'null']]])]
        public ?TextDocumentSyncClientCapabilities $synchronization = null,
        /**
         * Capabilities specific to the `textDocument/completion` request.
         */
        #[Shape(['union' => [['class' => CompletionClientCapabilities::class], ['scalar' => 'null']]])]
        public ?CompletionClientCapabilities $completion = null,
        /**
         * Capabilities specific to the `textDocument/hover` request.
         */
        #[Shape(['union' => [['class' => HoverClientCapabilities::class], ['scalar' => 'null']]])]
        public ?HoverClientCapabilities $hover = null,
        /**
         * Capabilities specific to the `textDocument/signatureHelp` request.
         */
        #[Shape(['union' => [['class' => SignatureHelpClientCapabilities::class], ['scalar' => 'null']]])]
        public ?SignatureHelpClientCapabilities $signatureHelp = null,
        /**
         * Capabilities specific to the `textDocument/declaration` request.
         */
        #[Shape(['union' => [['class' => DeclarationClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DeclarationClientCapabilities $declaration = null,
        /**
         * Capabilities specific to the `textDocument/definition` request.
         */
        #[Shape(['union' => [['class' => DefinitionClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DefinitionClientCapabilities $definition = null,
        /**
         * Capabilities specific to the `textDocument/typeDefinition` request.
         */
        #[Shape(['union' => [['class' => TypeDefinitionClientCapabilities::class], ['scalar' => 'null']]])]
        public ?TypeDefinitionClientCapabilities $typeDefinition = null,
        /**
         * Capabilities specific to the `textDocument/implementation` request.
         */
        #[Shape(['union' => [['class' => ImplementationClientCapabilities::class], ['scalar' => 'null']]])]
        public ?ImplementationClientCapabilities $implementation = null,
        /**
         * Capabilities specific to the `textDocument/references` request.
         */
        #[Shape(['union' => [['class' => ReferenceClientCapabilities::class], ['scalar' => 'null']]])]
        public ?ReferenceClientCapabilities $references = null,
        /**
         * Capabilities specific to the `textDocument/documentHighlight` request.
         */
        #[Shape(['union' => [['class' => DocumentHighlightClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentHighlightClientCapabilities $documentHighlight = null,
        /**
         * Capabilities specific to the `textDocument/documentSymbol` request.
         */
        #[Shape(['union' => [['class' => DocumentSymbolClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentSymbolClientCapabilities $documentSymbol = null,
        /**
         * Capabilities specific to the `textDocument/codeAction` request.
         */
        #[Shape(['union' => [['class' => CodeActionClientCapabilities::class], ['scalar' => 'null']]])]
        public ?CodeActionClientCapabilities $codeAction = null,
        /**
         * Capabilities specific to the `textDocument/codeLens` request.
         */
        #[Shape(['union' => [['class' => CodeLensClientCapabilities::class], ['scalar' => 'null']]])]
        public ?CodeLensClientCapabilities $codeLens = null,
        /**
         * Capabilities specific to the `textDocument/documentLink` request.
         */
        #[Shape(['union' => [['class' => DocumentLinkClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentLinkClientCapabilities $documentLink = null,
        /**
         * Capabilities specific to the `textDocument/documentColor` and the
         * `textDocument/colorPresentation` request.
         */
        #[Shape(['union' => [['class' => DocumentColorClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentColorClientCapabilities $colorProvider = null,
        /**
         * Capabilities specific to the `textDocument/formatting` request.
         */
        #[Shape(['union' => [['class' => DocumentFormattingClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentFormattingClientCapabilities $formatting = null,
        /**
         * Capabilities specific to the `textDocument/rangeFormatting` request.
         */
        #[Shape(['union' => [['class' => DocumentRangeFormattingClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentRangeFormattingClientCapabilities $rangeFormatting = null,
        /**
         * Capabilities specific to the `textDocument/onTypeFormatting` request.
         */
        #[Shape(['union' => [['class' => DocumentOnTypeFormattingClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DocumentOnTypeFormattingClientCapabilities $onTypeFormatting = null,
        /**
         * Capabilities specific to the `textDocument/rename` request.
         */
        #[Shape(['union' => [['class' => RenameClientCapabilities::class], ['scalar' => 'null']]])]
        public ?RenameClientCapabilities $rename = null,
        /**
         * Capabilities specific to the `textDocument/foldingRange` request.
         */
        #[Shape(['union' => [['class' => FoldingRangeClientCapabilities::class], ['scalar' => 'null']]])]
        public ?FoldingRangeClientCapabilities $foldingRange = null,
        /**
         * Capabilities specific to the `textDocument/selectionRange` request.
         */
        #[Shape(['union' => [['class' => SelectionRangeClientCapabilities::class], ['scalar' => 'null']]])]
        public ?SelectionRangeClientCapabilities $selectionRange = null,
        /**
         * Capabilities specific to the `textDocument/publishDiagnostics` notification.
         */
        #[Shape(['union' => [['class' => PublishDiagnosticsClientCapabilities::class], ['scalar' => 'null']]])]
        public ?PublishDiagnosticsClientCapabilities $publishDiagnostics = null,
        /**
         * Capabilities specific to the various call hierarchy requests.
         */
        #[Shape(['union' => [['class' => CallHierarchyClientCapabilities::class], ['scalar' => 'null']]])]
        public ?CallHierarchyClientCapabilities $callHierarchy = null,
        /**
         * Capabilities specific to the various semantic token request.
         */
        #[Shape(['union' => [['class' => SemanticTokensClientCapabilities::class], ['scalar' => 'null']]])]
        public ?SemanticTokensClientCapabilities $semanticTokens = null,
        /**
         * Capabilities specific to the `textDocument/linkedEditingRange` request.
         */
        #[Shape(['union' => [['class' => LinkedEditingRangeClientCapabilities::class], ['scalar' => 'null']]])]
        public ?LinkedEditingRangeClientCapabilities $linkedEditingRange = null,
        /**
         * Client capabilities specific to the `textDocument/moniker` request.
         */
        #[Shape(['union' => [['class' => MonikerClientCapabilities::class], ['scalar' => 'null']]])]
        public ?MonikerClientCapabilities $moniker = null,
        /**
         * Capabilities specific to the various type hierarchy requests.
         *
         * @var array{dynamicRegistration?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $typeHierarchy = null,
        /**
         * Capabilities specific to the `textDocument/inlineValue` request.
         *
         * @var array{dynamicRegistration?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $inlineValue = null,
        /**
         * Capabilities specific to the `textDocument/inlayHint` request.
         *
         * @var InlayHintClientCapabilities|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $inlayHint = null,
        /**
         * Capabilities specific to the diagnostic pull model.
         *
         * @var DiagnosticClientCapabilities|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $diagnostic = null
    ) {}
}
