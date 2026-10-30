<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * A special workspace symbol that supports locations without a range.
 *
 * See also SymbolInformation.
 *
 * Mixins (implemented TS interfaces): BaseSymbolInformation
 */
class WorkspaceSymbol extends BaseSymbolInformation
{
    public function __construct(
        /**
         * The location of the symbol. Whether a server is allowed to
         * return a location without a range depends on the client
         * capability `workspace.symbol.resolveSupport`.
         *
         * See SymbolInformation#location for more details.
         *
         * @var Location|array{uri:string}
         */
        #[Deserialize(Location::class)]
        public $location,
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
         * A data entry field that is preserved on a workspace symbol between a
         * workspace symbol request and a workspace symbol resolve request.
         *
         * @var mixed|null
         */
        public $data = null,
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
