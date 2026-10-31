<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class TextDocumentContentChangeIncrementalEvent implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range of the document that changed.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * The new text for the provided range.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $text,

        /**
         * The optional length of the range that got replaced.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public ?int $rangeLength = null
    ) {}
}
