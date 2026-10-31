<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a color in RGBA space.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class Color implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The red component of this color in the range [0-1].
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $red,

        /**
         * The green component of this color in the range [0-1].
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $green,

        /**
         * The blue component of this color in the range [0-1].
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $blue,

        /**
         * The alpha component of this color in the range [0-1].
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $alpha
    ) {}
}
