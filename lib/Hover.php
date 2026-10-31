<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The result of a hover request.
 */
class Hover implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The hover's content
         *
         * @var MarkupContent|string|list<string>
         */
        #[Shape(
            new Shape\Union(
                MarkupContent::class,
                new Shape\Scalar('string'),
                new Shape\Sequence(new Shape\Scalar('string')),
            ),
        )]
        public $contents,

        /**
         * An optional range inside the text document that is used to
         * visualize the hover, e.g. by changing the background color.
         */
        #[Shape(new Shape\Union(Range::class, new Shape\Scalar('null')))]
        public ?Range $range = null
    ) {}
}
