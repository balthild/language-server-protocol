<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Client capabilities specific to regular expressions.
 */
class RegularExpressionsClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The engine's name.
         */
        public string $engine,
        /**
         * The engine's version.
         */
        public ?string $version = null
    ) {}
}
