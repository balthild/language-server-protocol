<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class SemanticTokensDeltaPartialResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<SemanticTokensEdit>
         */
        #[Shape(['list' => ['class' => SemanticTokensEdit::class]])]
        public array $edits
    ) {}
}
