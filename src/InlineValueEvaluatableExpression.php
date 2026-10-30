<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class InlineValueEvaluatableExpression implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document range for which the inline value applies.
         * The range is used to extract the evaluatable expression from the underlying document.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * If specified the expression overrides the extracted expression.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $expression = null
    ) {}
}
