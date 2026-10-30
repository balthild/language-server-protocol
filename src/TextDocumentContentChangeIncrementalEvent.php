<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class TextDocumentContentChangeIncrementalEvent implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range of the document that changed.
         */
        #[Deserialize(Range::class)]
        public Range $range,
        /**
         * The new text for the provided range.
         */
        public string $text,
        /**
         * The optional length of the range that got replaced.
         */
        public ?int $rangeLength = null,
    ) {
    }
}