<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A text edit applicable to a text document.
 */
class TextEdit implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range of the text document to be manipulated. To insert
         * text into a document create a range where start === end.
         */
        #[Shape(Range::class)]
        public Range $range,
        /**
         * The string to be inserted. For delete operations use an
         * empty string.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $newText
    ) {}
}
