<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * An item to transfer a text document from the client to the
 * server.
 */
class TextDocumentItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document's uri.
         */
        public string $uri,
        /**
         * The text document's language identifier.
         */
        public string $languageId,
        /**
         * The version number of this document (it will increase after each
         * change, including undo/redo).
         */
        public int $version,
        /**
         * The content of the opened text document.
         */
        public string $text,
    ) {
        $this->uri = urldecode($uri);
    }
}