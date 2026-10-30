<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A base for all symbol information.
 */
class BaseSymbolInformation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The name of this symbol.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $name,
        /**
         * The kind of this symbol.
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
         * Tags for this symbol.
         *
         * @var list<SymbolTag::*>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Literal(1)), new Shape\Scalar('null')))]
        public ?array $tags = null,
        /**
         * The name of the symbol containing this symbol. This information is for
         * user interface purposes (e.g. to render a qualifier in the user interface
         * if necessary). It can't be used to re-infer a hierarchy for the document
         * symbols.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $containerName = null
    ) {}
}
