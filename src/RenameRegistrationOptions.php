<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, RenameOptions
 */
class RenameRegistrationOptions extends TextDocumentRegistrationOptions
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
         * Renames should be checked and tested before being executed.
         */
        public ?bool $prepareProvider = null,
        public ?bool $workDoneProgress = null
    ) {}
}
