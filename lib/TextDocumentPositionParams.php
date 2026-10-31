<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A parameter literal used in requests to pass a text document and a position inside that
 * document.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class TextDocumentPositionParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document.
         */
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * The position inside the text document.
         */
        #[Shape(Position::class)]
        public Position $position
    ) {}
}
