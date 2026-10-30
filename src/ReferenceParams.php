<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Parameters for a [ReferencesRequest](#ReferencesRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams, PartialResultParams
 */
class ReferenceParams extends TextDocumentPositionParams
{
    public function __construct(
        #[Deserialize(ReferenceContext::class)]
        public ReferenceContext $context,
        /**
         * The text document.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * The position inside the text document.
         */
        #[Deserialize(Position::class)]
        public Position $position,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        public $partialResultToken = null,
    ) {
    }
}