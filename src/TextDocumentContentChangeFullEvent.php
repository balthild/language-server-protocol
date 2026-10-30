<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class TextDocumentContentChangeFullEvent implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The new text of the whole document.
         */
        public string $text
    ) {}
}
