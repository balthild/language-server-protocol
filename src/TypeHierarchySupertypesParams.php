<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 *
 * @phpstan-type TypeHierarchyItem array{name: string, kind: SymbolKind::*, tags?: list<SymbolTag::*>, detail?: string, uri: string, range: Range, selectionRange: Range, data?: mixed}
 */
class TypeHierarchySupertypesParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var TypeHierarchyItem
         */
        #[Shape([
            'shape' => [
                'name' => ['scalar' => 'string'],
                'kind' => [
                    'union' => [
                        ['literal' => 1],
                        ['literal' => 2],
                        ['literal' => 3],
                        ['literal' => 4],
                        ['literal' => 5],
                        ['literal' => 6],
                        ['literal' => 7],
                        ['literal' => 8],
                        ['literal' => 9],
                        ['literal' => 10],
                        ['literal' => 11],
                        ['literal' => 12],
                        ['literal' => 13],
                        ['literal' => 14],
                        ['literal' => 15],
                        ['literal' => 16],
                        ['literal' => 17],
                        ['literal' => 18],
                        ['literal' => 19],
                        ['literal' => 20],
                        ['literal' => 21],
                        ['literal' => 22],
                        ['literal' => 23],
                        ['literal' => 24],
                        ['literal' => 25],
                        ['literal' => 26],
                    ],
                ],
                'tags?' => ['list' => ['literal' => 1]],
                'detail?' => ['scalar' => 'string'],
                'uri' => ['scalar' => 'string'],
                'range' => ['class' => Range::class],
                'selectionRange' => ['class' => Range::class],
                'data?' => ['scalar' => 'mixed'],
            ],
        ])]
        public array $item,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $partialResultToken = null
    ) {}
}
