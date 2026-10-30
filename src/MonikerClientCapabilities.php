<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Client capabilities specific to the moniker request.
 */
class MonikerClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether moniker supports dynamic registration. If this is set to `true`
         * the client supports the new `MonikerRegistrationOptions` return value
         * for the corresponding server capability as well.
         */
        public ?bool $dynamicRegistration = null
    ) {}
}
