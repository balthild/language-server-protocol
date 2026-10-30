<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Represents information about programming constructs like variables, classes,
 * interfaces etc.
 *
 * Mixins (implemented TS interfaces): BaseSymbolInformation
 */
class SymbolInformation extends BaseSymbolInformation
{
    public function __construct(
        /**
         * The location of this symbol. The location's range is used by a tool
         * to reveal the location in the editor. If the symbol is selected in the
         * tool the range's start information is used to position the cursor. So
         * the range usually spans more than the actual symbol's name and does
         * normally include things like visibility modifiers.
         *
         * The range doesn't have to denote a node range in the sense of an abstract
         * syntax tree. It can therefore not be used to re-construct a hierarchy of
         * the symbols.
         */
        #[Deserialize(Location::class)]
        public Location $location,
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
         * Indicates if this symbol is deprecated.
         */
        public ?bool $deprecated = null,
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
