<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The client capabilities  of a [CodeLensRequest](#CodeLensRequest).
 */
class CodeLensClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether code lens supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
    ) {
    }
}