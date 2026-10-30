<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, DiagnosticOptions, StaticRegistrationOptions
 */
class DiagnosticRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var list<(string|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{language: string, scheme: string, pattern: string}|array{notebook: string|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}|array{notebookType: string, scheme: string, pattern: string}, language: string})>|null
         */
        public $documentSelector = null,
        /**
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        public ?string $id = null
    ) {}
}
