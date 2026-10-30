<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SemanticTokensDelta implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The semantic token edits to transform a previous result into a new result.
         *
         * @var array<SemanticTokensEdit>
         */
        #[Deserialize(SemanticTokensEdit::class, iterable: true)]
        public array $edits,
        public ?string $resultId = null
    ) {}
}
