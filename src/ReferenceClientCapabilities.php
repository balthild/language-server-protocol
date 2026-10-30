<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Client Capabilities for a [ReferencesRequest](#ReferencesRequest).
 */
class ReferenceClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether references supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null
    ) {}
}
