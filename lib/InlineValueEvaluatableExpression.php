<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class InlineValueEvaluatableExpression implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document range for which the inline value applies.
         * The range is used to extract the evaluatable expression from the underlying document.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * If specified the expression overrides the extracted expression.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $expression = null
    ) {}
}
