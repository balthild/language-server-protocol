<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a color in RGBA space.
 */
class Color implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The red component of this color in the range [0-1].
         */
        #[Shape(['scalar' => 'int'])]
        public int $red,
        /**
         * The green component of this color in the range [0-1].
         */
        #[Shape(['scalar' => 'int'])]
        public int $green,
        /**
         * The blue component of this color in the range [0-1].
         */
        #[Shape(['scalar' => 'int'])]
        public int $blue,
        /**
         * The alpha component of this color in the range [0-1].
         */
        #[Shape(['scalar' => 'int'])]
        public int $alpha
    ) {}
}
