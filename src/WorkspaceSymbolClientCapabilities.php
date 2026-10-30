<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client capabilities for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 */
class WorkspaceSymbolClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Symbol request supports dynamic registration.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,

        /**
         * Specific capabilities for the `SymbolKind` in the `workspace/symbol` request.
         *
         * @var array{valueSet?: list<SymbolKind::*>}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $symbolKind = null,

        /**
         * The client supports tags on `SymbolInformation`.
         * Clients supporting tags have to handle unknown tags gracefully.
         *
         * @var array{valueSet: list<SymbolTag::*>}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $tagSupport = null,

        /**
         * The client support partial workspace symbols. The client will send the
         * request `workspaceSymbol/resolve` to the server to resolve additional
         * properties.
         *
         * @var array{properties: list<string>}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $resolveSupport = null
    ) {}
}
