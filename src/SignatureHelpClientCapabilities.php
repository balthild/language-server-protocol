<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Client Capabilities for a [SignatureHelpRequest](#SignatureHelpRequest).
 */
class SignatureHelpClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether signature help supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports the following `SignatureInformation`
         * specific properties.
         *
         * @var array{documentationFormat:array<MarkupKind::*>,parameterInformation:array{labelOffsetSupport:bool},activeParameterSupport:bool}|null
         */
        public ?array $signatureInformation = null,
        /**
         * The client supports to send additional context information for a
         * `textDocument/signatureHelp` request. A client that opts into
         * contextSupport will also support the `retriggerCharacters` on
         * `SignatureHelpOptions`.
         */
        public ?bool $contextSupport = null
    ) {}
}
