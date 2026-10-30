<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Client Capabilities for a [DefinitionRequest](#DefinitionRequest).
 */
class DefinitionClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether definition supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports additional metadata in the form of definition links.
         */
        public ?bool $linkSupport = null
    ) {}
}
