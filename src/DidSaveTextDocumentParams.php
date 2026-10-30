<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * Optional the content when saved. Depends on the includeText value
         * when the save notification was requested.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $text = null
    ) {}
}
