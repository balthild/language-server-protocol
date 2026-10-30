<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class DeclarationClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether declaration supports dynamic registration. If this is set to `true`
         * the client supports the new `DeclarationRegistrationOptions` return value
         * for the corresponding server capability as well.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports additional metadata in the form of declaration links.
         */
        public ?bool $linkSupport = null
    ) {}
}
