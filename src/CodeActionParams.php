<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a [CodeActionRequest](#CodeActionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class CodeActionParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The document in which the command was invoked.
         */
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The range for which the command was invoked.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * Context carrying additional information.
         */
        #[Shape(['class' => CodeActionContext::class])]
        public CodeActionContext $context,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $partialResultToken = null
    ) {}
}
