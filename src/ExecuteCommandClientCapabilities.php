<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The client capabilities of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 */
class ExecuteCommandClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Execute command supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
    ) {
    }
}