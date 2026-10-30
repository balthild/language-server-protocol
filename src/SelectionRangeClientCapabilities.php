<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SelectionRangeClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether implementation supports dynamic registration for selection range providers. If this is set to `true`
         * the client supports the new `SelectionRangeRegistrationOptions` return value for the corresponding server
         * capability as well.
         */
        public ?bool $dynamicRegistration = null,
    ) {
    }
}