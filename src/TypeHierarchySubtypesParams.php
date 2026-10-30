<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public array $item,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        public $partialResultToken = null
    ) {}
}
