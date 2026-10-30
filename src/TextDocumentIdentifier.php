<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * A literal to identify a text document in the client.
 */
class TextDocumentIdentifier implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document's uri.
         */
        public string $uri
    ) {
        $this->uri = urldecode($uri);
    }
}
