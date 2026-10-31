<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class SemanticTokensLegend implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The token types a server uses.
         *
         * @var list<string>
         */
        #[Shape(new Shape\Sequence(new Shape\Scalar('string')))]
        public array $tokenTypes,

        /**
         * The token modifiers a server uses.
         *
         * @var list<string>
         */
        #[Shape(new Shape\Sequence(new Shape\Scalar('string')))]
        public array $tokenModifiers
    ) {}
}
