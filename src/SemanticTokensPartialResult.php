<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class SemanticTokensPartialResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<int>
         */
        #[Shape(new Shape\Sequence(new Shape\Scalar('int')))]
        public array $data
    ) {}
}
