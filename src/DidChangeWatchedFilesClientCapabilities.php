<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class DidChangeWatchedFilesClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Did change watched files notification supports dynamic registration. Please note
         * that the current protocol doesn't support static configuration for file changes
         * from the server side.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * Whether the client has support for {@link RelativePattern relative pattern}
         * or not.
         */
        public ?bool $relativePatternSupport = null
    ) {}
}
