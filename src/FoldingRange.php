<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a folding range. To be valid, start and end line must be bigger than zero and smaller
 * than the number of lines in the document. Clients are free to ignore invalid ranges.
 */
class FoldingRange implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The zero-based start line of the range to fold. The folded area starts after the line's last character.
         * To be valid, the end must be zero or larger and smaller than the number of lines in the document.
         */
        #[Shape(['scalar' => 'int'])]
        public int $startLine,
        /**
         * The zero-based end line of the range to fold. The folded area ends with the line's last character.
         * To be valid, the end must be zero or larger and smaller than the number of lines in the document.
         */
        #[Shape(['scalar' => 'int'])]
        public int $endLine,
        /**
         * The zero-based character offset from where the folded range starts. If not defined, defaults to the length of the start line.
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $startCharacter = null,
        /**
         * The zero-based character offset before the folded range ends. If not defined, defaults to the length of the end line.
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $endCharacter = null,
        /**
         * Describes the kind of the folding range such as `comment' or 'region'. The kind
         * is used to categorize folding ranges and used by commands like 'Fold all comments'.
         * See [FoldingRangeKind](#FoldingRangeKind) for an enumeration of standardized kinds.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $kind = null,
        /**
         * The text that the client should show when the specified range is
         * collapsed. If not defined or not supported by the client, a default
         * will be chosen by the client.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $collapsedText = null
    ) {}
}
