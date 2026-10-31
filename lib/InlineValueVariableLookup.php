<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

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
        #[Shape(Range::class)]
        public Range $range,

        /**
         * How to perform the lookup.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $caseSensitiveLookup,

        /**
         * If specified the name of the variable to look up.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $variableName = null
    ) {}
}
