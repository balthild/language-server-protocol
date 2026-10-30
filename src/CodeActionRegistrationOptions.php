<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [CodeActionRequest](#CodeActionRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, CodeActionOptions
 */
class CodeActionRegistrationOptions extends TextDocumentRegistrationOptions
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
         * CodeActionKinds that this server may return.
         * 
         * The list of kinds may be generic, such as `CodeActionKind.Refactor`, or the server
         * may list out every specific kind they provide.
         *
         * @var array<string>|null
         */
        public ?array $codeActionKinds = null,
        /**
         * The server provides support to resolve additional
         * information for a code action.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null,
    ) {
    }
}