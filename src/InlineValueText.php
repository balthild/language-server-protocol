<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class InlineValueText implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document range for which the inline value applies.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The text of the inline value.
         */
        #[Shape(['scalar' => 'string'])]
        public string $text
    ) {}
}
