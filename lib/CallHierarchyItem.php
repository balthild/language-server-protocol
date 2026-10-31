<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents programming constructs like functions or constructors in the context
 * of call hierarchy.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class CallHierarchyItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The name of this item.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $name,

        /**
         * The kind of this item.
         *
         * @var SymbolKind::*
         */
        #[Shape(
            new Shape\Union(
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
        )]
        public $kind,

        /**
         * The resource identifier of this item.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * The range enclosing this symbol not including leading/trailing whitespace but everything else, e.g. comments and code.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * The range that should be selected and revealed when this symbol is being picked, e.g. the name of a function.
         * Must be contained by the [`range`](#CallHierarchyItem.range).
         */
        #[Shape(Range::class)]
        public Range $selectionRange,

        /**
         * Tags for this item.
         *
         * @var list<SymbolTag::*>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Literal(1)), new Shape\Scalar('null')))]
        public ?array $tags = null,

        /**
         * More detail for this item, e.g. the signature of a function.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $detail = null,

        /**
         * A data entry field that is preserved between a call hierarchy prepare and
         * incoming calls or outgoing calls requests.
         *
         * @var mixed|null
         */
        #[Shape(new Shape\Union(new Shape\Unknown(), new Shape\Scalar('null')))]
        public $data = null
    ) {
        $this->uri = \urldecode($uri);
    }
}
