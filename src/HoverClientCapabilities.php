<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class HoverClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether hover supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * Client supports the following content formats for the content
         * property. The order describes the preferred format of the client.
         *
         * @var array<MarkupKind::*>|null
         */
        public ?array $contentFormat = null
    ) {}
}
