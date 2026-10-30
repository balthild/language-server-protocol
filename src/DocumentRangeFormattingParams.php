<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * The parameters of a [DocumentRangeFormattingRequest](#DocumentRangeFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class DocumentRangeFormattingParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The document to format.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * The range to format
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * The format options
         */
        #[Deserialize(FormattingOptions::class)]
        public FormattingOptions $options,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null
    ) {}
}
