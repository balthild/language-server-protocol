<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class InlineValueVariableLookup implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document range for which the inline value applies.
         * The range is used to extract the variable name from the underlying document.
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * How to perform the lookup.
         */
        public bool $caseSensitiveLookup,
        /**
         * If specified the name of the variable to look up.
         */
        public ?string $variableName = null
    ) {}
}
