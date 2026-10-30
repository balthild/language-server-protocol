<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The client capabilities of a [DocumentLinkRequest](#DocumentLinkRequest).
 */
class DocumentLinkClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether document link supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * Whether the client supports the `tooltip` property on `DocumentLink`.
         */
        public ?bool $tooltipSupport = null
    ) {}
}
