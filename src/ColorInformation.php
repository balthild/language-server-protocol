<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a color range from a document.
 */
class ColorInformation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range in the document where this color appears.
         */
        #[Shape(Range::class)]
        public Range $range,
        /**
         * The actual color value for this color range.
         */
        #[Shape(Color::class)]
        public Color $color
    ) {}
}
