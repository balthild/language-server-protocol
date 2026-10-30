<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class SemanticTokens implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual tokens.
         *
         * @var list<int>
         */
        #[Shape(['list' => ['scalar' => 'int']])]
        public array $data,
        /**
         * An optional result id. If provided and clients support delta updating
         * the client will include the result id in the next semantic token request.
         * A server can then instead of computing all semantic tokens again simply
         * send a delta.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $resultId = null
    ) {}
}
