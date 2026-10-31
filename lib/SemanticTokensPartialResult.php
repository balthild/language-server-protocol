<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.semanticTokens.d.ts
 */
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
