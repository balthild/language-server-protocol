<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SemanticTokensDeltaPartialResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<SemanticTokensEdit>
         */
        #[Deserialize(SemanticTokensEdit::class, at: '[]')]
        public array $edits
    ) {}
}
