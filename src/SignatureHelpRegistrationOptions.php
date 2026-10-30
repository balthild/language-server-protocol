<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, SignatureHelpOptions
 */
class SignatureHelpRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var array<(string|array{language:string,scheme:string,pattern:string}|array{language:string,scheme:string,pattern:string}|array{language:string,scheme:string,pattern:string}|array{notebook:string|array{notebookType:string,scheme:string,pattern:string}|array{notebookType:string,scheme:string,pattern:string}|array{notebookType:string,scheme:string,pattern:string},language:string})>|null
         */
        public $documentSelector = null,
        /**
         * List of characters that trigger signature help automatically.
         *
         * @var array<string>|null
         */
        public ?array $triggerCharacters = null,
        /**
         * List of characters that re-trigger signature help.
         *
         * These trigger characters are only active when signature help is already showing. All trigger characters
         * are also counted as re-trigger characters.
         *
         * @var array<string>|null
         */
        public ?array $retriggerCharacters = null,
        public ?bool $workDoneProgress = null
    ) {}
}
