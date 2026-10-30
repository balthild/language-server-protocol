<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $name,
        /**
         * The kind of this symbol.
         *
         * @var SymbolKind::*
         */
        public $kind,
        /**
         * Tags for this symbol.
         *
         * @var array<SymbolTag::*>|null
         */
        public ?array $tags = null,
        /**
         * The name of the symbol containing this symbol. This information is for
         * user interface purposes (e.g. to render a qualifier in the user interface
         * if necessary). It can't be used to re-infer a hierarchy for the document
         * symbols.
         */
        public ?string $containerName = null
    ) {}
}
