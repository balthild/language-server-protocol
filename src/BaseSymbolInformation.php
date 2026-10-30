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
        #[Shape(['scalar' => 'string'])]
        public string $name,
        /**
         * The kind of this symbol.
         *
         * @var SymbolKind::*
         */
        #[Shape([
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
        ])]
        public $kind,
        /**
         * Tags for this symbol.
         *
         * @var list<SymbolTag::*>|null
         */
        #[Shape(['union' => [['list' => ['literal' => 1]], ['scalar' => 'null']]])]
        public ?array $tags = null,
        /**
         * The name of the symbol containing this symbol. This information is for
         * user interface purposes (e.g. to render a qualifier in the user interface
         * if necessary). It can't be used to re-infer a hierarchy for the document
         * symbols.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $containerName = null
    ) {}
}
