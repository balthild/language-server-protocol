<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class InlineValueVariableLookup implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document range for which the inline value applies.
         * The range is used to extract the variable name from the underlying document.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * How to perform the lookup.
         */
        #[Shape(['scalar' => 'bool'])]
        public bool $caseSensitiveLookup,
        /**
         * If specified the name of the variable to look up.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $variableName = null
    ) {}
}
