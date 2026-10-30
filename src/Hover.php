<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape([
            'union' => [['class' => MarkupContent::class], ['scalar' => 'string'], ['list' => ['scalar' => 'string']]],
        ])]
        public $contents,
        /**
         * An optional range inside the text document that is used to
         * visualize the hover, e.g. by changing the background color.
         */
        #[Shape(['union' => [['class' => Range::class], ['scalar' => 'null']]])]
        public ?Range $range = null
    ) {}
}
