<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A parameter literal used in requests to pass a text document and a position inside that
 * document.
 */
class TextDocumentPositionParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document.
         */
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The position inside the text document.
         */
        #[Shape(['class' => Position::class])]
        public Position $position
    ) {}
}
