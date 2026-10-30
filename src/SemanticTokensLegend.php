<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SemanticTokensLegend implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The token types a server uses.
         *
         * @var array<string>
         */
        public array $tokenTypes,
        /**
         * The token modifiers a server uses.
         *
         * @var array<string>
         */
        public array $tokenModifiers
    ) {}
}
