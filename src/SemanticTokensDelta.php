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
        #[Shape(['list' => ['class' => SemanticTokensEdit::class]])]
        public array $edits,
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $resultId = null
    ) {}
}
