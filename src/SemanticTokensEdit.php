<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class SemanticTokensEdit implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The start offset of the edit.
         */
        public int $start,
        /**
         * The count of elements to remove.
         */
        public int $deleteCount,
        /**
         * The elements to insert.
         *
         * @var array<int>|null
         */
        public ?array $data = null,
    ) {
    }
}