<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Client capabilities of a [DocumentFormattingRequest](#DocumentFormattingRequest).
 */
class DocumentFormattingClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether formatting supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null
    ) {}
}
