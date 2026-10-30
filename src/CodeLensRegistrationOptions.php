<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [CodeLensRequest](#CodeLensRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, CodeLensOptions
 */
class CodeLensRegistrationOptions extends TextDocumentRegistrationOptions
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
         * Code lens has a resolve provider as well.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null
    ) {}
}
