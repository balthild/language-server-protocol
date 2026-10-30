<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [DocumentSymbolRequest](#DocumentSymbolRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, DocumentSymbolOptions
 */
class DocumentSymbolRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var list<(string|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{notebook: string|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}, language: string})>|null
         */
        public $documentSelector = null,
        /**
         * A human-readable string that is shown when multiple outlines trees
         * are shown for the same document.
         */
        public ?string $label = null,
        public ?bool $workDoneProgress = null
    ) {}
}
