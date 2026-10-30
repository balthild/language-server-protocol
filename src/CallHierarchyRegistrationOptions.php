<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Call hierarchy options used during static or dynamic registration.
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, CallHierarchyOptions, StaticRegistrationOptions
 */
class CallHierarchyRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var list<(string|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{notebook: string|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}, language: string})>|null
         */
        public $documentSelector = null,
        public ?bool $workDoneProgress = null,
        /**
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        public ?string $id = null
    ) {}
}
