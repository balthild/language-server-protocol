<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
         * @var MarkupContent|string|array<string>
         */
        #[Deserialize(MarkupContent::class)]
        public $contents,
        /**
         * An optional range inside the text document that is used to
         * visualize the hover, e.g. by changing the background color.
         */
        #[Deserialize(Range::class)]
        public ?Range $range = null
    ) {}
}
