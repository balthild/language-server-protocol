<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The result of a linked editing range request.
 */
class LinkedEditingRanges implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A list of ranges that can be edited together. The ranges must have
         * identical length and contain identical text content. The ranges cannot overlap.
         *
         * @var list<Range>
         */
        #[Shape(['list' => ['class' => Range::class]])]
        public array $ranges,
        /**
         * An optional word pattern (regular expression) that describes valid contents for
         * the given ranges. If no pattern is provided, the client configuration's word
         * pattern will be used.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $wordPattern = null
    ) {}
}
