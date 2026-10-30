<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameter of a `textDocument/prepareCallHierarchy` request.
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams
 */
class CallHierarchyPrepareParams extends TextDocumentPositionParams
{
    public function __construct(
        /**
         * The text document.
         */
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The position inside the text document.
         */
        #[Shape(['class' => Position::class])]
        public Position $position,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null
    ) {}
}
