<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class SemanticTokensEdit implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The start offset of the edit.
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $start,

        /**
         * The count of elements to remove.
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $deleteCount,

        /**
         * The elements to insert.
         *
         * @var list<int>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('int')), new Shape\Scalar('null')))]
        public ?array $data = null
    ) {}
}
