<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client Capabilities for a [DocumentSymbolRequest](#DocumentSymbolRequest).
 */
class DocumentSymbolClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether document symbol supports dynamic registration.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $dynamicRegistration = null,
        /**
         * Specific capabilities for the `SymbolKind` in the
         * `textDocument/documentSymbol` request.
         *
         * @var array{valueSet?: list<SymbolKind::*>}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $symbolKind = null,
        /**
         * The client supports hierarchical document symbols.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $hierarchicalDocumentSymbolSupport = null,
        /**
         * The client supports tags on `SymbolInformation`. Tags are supported on
         * `DocumentSymbol` if `hierarchicalDocumentSymbolSupport` is set to true.
         * Clients supporting tags have to handle unknown tags gracefully.
         *
         * @var array{valueSet: list<SymbolTag::*>}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $tagSupport = null,
        /**
         * The client supports an additional label presented in the UI when
         * registering a document symbol provider.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $labelSupport = null
    ) {}
}
