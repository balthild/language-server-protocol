<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SemanticTokens implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual tokens.
         *
         * @var array<int>
         */
        public array $data,
        /**
         * An optional result id. If provided and clients support delta updating
         * the client will include the result id in the next semantic token request.
         * A server can then instead of computing all semantic tokens again simply
         * send a delta.
         */
        public ?string $resultId = null,
    ) {
    }
}