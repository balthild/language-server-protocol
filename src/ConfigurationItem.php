<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class ConfigurationItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The scope to get the configuration section for.
         */
        public ?string $scopeUri = null,
        /**
         * The configuration section asked for.
         */
        public ?string $section = null,
    ) {
    }
}