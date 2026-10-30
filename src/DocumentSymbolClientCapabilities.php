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
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,
        /**
         * Specific capabilities for the `SymbolKind` in the
         * `textDocument/documentSymbol` request.
         *
         * @var array{valueSet?: list<SymbolKind::*>}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $symbolKind = null,
        /**
         * The client supports hierarchical document symbols.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $hierarchicalDocumentSymbolSupport = null,
        /**
         * The client supports tags on `SymbolInformation`. Tags are supported on
         * `DocumentSymbol` if `hierarchicalDocumentSymbolSupport` is set to true.
         * Clients supporting tags have to handle unknown tags gracefully.
         *
         * @var array{valueSet: list<SymbolTag::*>}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $tagSupport = null,
        /**
         * The client supports an additional label presented in the UI when
         * registering a document symbol provider.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $labelSupport = null
    ) {}
}
