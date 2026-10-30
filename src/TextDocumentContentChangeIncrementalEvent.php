<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class TextDocumentContentChangeIncrementalEvent implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range of the document that changed.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The new text for the provided range.
         */
        #[Shape(['scalar' => 'string'])]
        public string $text,
        /**
         * The optional length of the range that got replaced.
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $rangeLength = null
    ) {}
}
