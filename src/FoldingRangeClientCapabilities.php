<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class FoldingRangeClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether implementation supports dynamic registration for folding range
         * providers. If this is set to `true` the client supports the new
         * `FoldingRangeRegistrationOptions` return value for the corresponding
         * server capability as well.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $dynamicRegistration = null,
        /**
         * The maximum number of folding ranges that the client prefers to receive
         * per document. The value serves as a hint, servers are free to follow the
         * limit.
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $rangeLimit = null,
        /**
         * If set, the client signals that it only supports folding complete lines.
         * If set, client will ignore specified `startCharacter` and `endCharacter`
         * properties in a FoldingRange.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $lineFoldingOnly = null,
        /**
         * Specific options for the folding range kind.
         *
         * @var array{valueSet?: list<string>}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $foldingRangeKind = null,
        /**
         * Specific options for the folding range.
         *
         * @var array{collapsedText?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $foldingRange = null
    ) {}
}
