<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 *
 * @phpstan-type InlineValueContext array{frameId: int, stoppedLocation: Range}
 */
class InlineValueParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document.
         */
        #[Shape(['class' => TextDocumentIdentifier::class])]
        public TextDocumentIdentifier $textDocument,
        /**
         * The document range for which inline values should be computed.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * Additional information about the context in which inline values were
         * requested.
         *
         * @var InlineValueContext
         */
        #[Shape(['shape' => ['frameId' => ['scalar' => 'int'], 'stoppedLocation' => ['class' => Range::class]]])]
        public array $context,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null
    ) {}
}
