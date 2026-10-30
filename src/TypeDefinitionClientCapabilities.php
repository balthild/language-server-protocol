<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Since 3.6.0
 */
class TypeDefinitionClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether implementation supports dynamic registration. If this is set to `true`
         * the client supports the new `TypeDefinitionRegistrationOptions` return value
         * for the corresponding server capability as well.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports additional metadata in the form of definition links.
         * 
         * Since 3.14.0
         */
        public ?bool $linkSupport = null,
    ) {
    }
}