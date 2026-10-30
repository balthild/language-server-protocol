<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Describe options to be used when registered for text document change events.
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions
 */
class TextDocumentChangeRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * How documents are synced to the server.
         *
         * @var TextDocumentSyncKind::*
         */
        public $syncKind,
        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var list<(string|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{notebook: string|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}, language: string})>|null
         */
        public $documentSelector = null
    ) {}
}
