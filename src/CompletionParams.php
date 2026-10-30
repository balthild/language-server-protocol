<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Completion parameters
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams, PartialResultParams
 */
class CompletionParams extends TextDocumentPositionParams
{
    public function __construct(
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
         * The completion context. This is only available it the client specifies
         * to send this using the client capability `textDocument.completion.contextSupport === true`
         */
        #[Deserialize(CompletionContext::class)]
        public ?CompletionContext $context = null,
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
        public $partialResultToken = null
    ) {}
}
