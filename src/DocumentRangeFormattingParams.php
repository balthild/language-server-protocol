<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The range to format
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The format options
         */
        #[Shape(['class' => FormattingOptions::class])]
        public FormattingOptions $options,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null
    ) {}
}
