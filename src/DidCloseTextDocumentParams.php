<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters sent in a close text document notification
 */
class DidCloseTextDocumentParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document that was closed.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument
    ) {}
}
