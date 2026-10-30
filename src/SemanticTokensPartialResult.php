<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SemanticTokensPartialResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<int>
         */
        public array $data
    ) {}
}
