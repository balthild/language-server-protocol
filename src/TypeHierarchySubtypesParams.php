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
class TypeHierarchySubtypesParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var TypeHierarchyItem
         */
        #[Shape(new Shape\Struct([
            'name' => new Shape\Scalar('string'),
            'kind' => new Shape\Union(
                new Shape\Literal(1),
                new Shape\Literal(2),
                new Shape\Literal(3),
                new Shape\Literal(4),
                new Shape\Literal(5),
                new Shape\Literal(6),
                new Shape\Literal(7),
                new Shape\Literal(8),
                new Shape\Literal(9),
                new Shape\Literal(10),
                new Shape\Literal(11),
                new Shape\Literal(12),
                new Shape\Literal(13),
                new Shape\Literal(14),
                new Shape\Literal(15),
                new Shape\Literal(16),
                new Shape\Literal(17),
                new Shape\Literal(18),
                new Shape\Literal(19),
                new Shape\Literal(20),
                new Shape\Literal(21),
                new Shape\Literal(22),
                new Shape\Literal(23),
                new Shape\Literal(24),
                new Shape\Literal(25),
                new Shape\Literal(26),
            ),
            'tags?' => new Shape\Sequence(new Shape\Literal(1)),
            'detail?' => new Shape\Scalar('string'),
            'uri' => new Shape\Scalar('string'),
            'range' => Range::class,
            'selectionRange' => Range::class,
            'data?' => new Shape\Scalar('mixed'),
        ]))]
        public array $item,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $partialResultToken = null
    ) {}
}
