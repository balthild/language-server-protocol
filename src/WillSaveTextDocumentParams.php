<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

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
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * The 'TextDocumentSaveReason'.
         *
         * @var TextDocumentSaveReason::*
         */
        #[Shape(new Shape\Union(new Shape\Literal(1), new Shape\Literal(2), new Shape\Literal(3)))]
        public $reason
    ) {}
}
