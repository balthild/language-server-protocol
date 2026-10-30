<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters sent in a save text document notification
 */
class DidSaveTextDocumentParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document that was saved.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * Optional the content when saved. Depends on the includeText value
         * when the save notification was requested.
         */
        public ?string $text = null
    ) {}
}
