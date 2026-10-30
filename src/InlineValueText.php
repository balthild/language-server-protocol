<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class InlineValueText implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document range for which the inline value applies.
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * The text of the inline value.
         */
        public string $text
    ) {}
}
