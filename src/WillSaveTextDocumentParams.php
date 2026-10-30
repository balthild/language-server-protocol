<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters sent in a will save text document notification.
 */
class WillSaveTextDocumentParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document that will be saved.
         */
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The 'TextDocumentSaveReason'.
         *
         * @var TextDocumentSaveReason::*
         */
        #[Shape(['union' => [['literal' => 1], ['literal' => 2], ['literal' => 3]]])]
        public $reason
    ) {}
}
