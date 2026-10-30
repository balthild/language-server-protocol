<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class SemanticTokensDelta implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The semantic token edits to transform a previous result into a new result.
         *
         * @var list<SemanticTokensEdit>
         */
        #[Shape(new Shape\Sequence(SemanticTokensEdit::class))]
        public array $edits,

        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $resultId = null
    ) {}
}
