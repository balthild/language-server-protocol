<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['scalar' => 'string'])]
        public string $engine,
        /**
         * The engine's version.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $version = null
    ) {}
}
