<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The publish diagnostic client capabilities.
 */
class PublishDiagnosticsClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether the clients accepts diagnostics with related information.
         */
        public ?bool $relatedInformation = null,
        /**
         * Client supports the tag property to provide meta data about a diagnostic.
         * Clients supporting tags have to handle unknown tags gracefully.
         *
         * @var array{valueSet: list<DiagnosticTag::*>}|null
         */
        public ?array $tagSupport = null,
        /**
         * Whether the client interprets the version property of the
         * `textDocument/publishDiagnostics` notification's parameter.
         */
        public ?bool $versionSupport = null,
        /**
         * Client supports a codeDescription property
         */
        public ?bool $codeDescriptionSupport = null,
        /**
         * Whether code action supports the `data` property which is
         * preserved between a `textDocument/publishDiagnostics` and
         * `textDocument/codeAction` request.
         */
        public ?bool $dataSupport = null
    ) {}
}
