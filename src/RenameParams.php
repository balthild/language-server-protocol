<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class RenameParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The document to rename.
         */
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The position at which this request was sent.
         */
        #[Shape(['class' => Position::class])]
        public Position $position,
        /**
         * The new name of the symbol. If the given name is not valid the
         * request must return a [ResponseError](#ResponseError) with an
         * appropriate message set.
         */
        #[Shape(['scalar' => 'string'])]
        public string $newName,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null
    ) {}
}
