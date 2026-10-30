<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * The actual color value for this color range.
         */
        #[Deserialize(Color::class)]
        public Color $color,
    ) {
    }
}