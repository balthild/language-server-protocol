<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class InlayHintParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * The document range for which inlay hints should be computed.
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null
    ) {}
}
