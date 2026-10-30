<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public ?bool $dynamicRegistration = null,
        /**
         * Specific capabilities for the `SymbolKind` in the `workspace/symbol` request.
         *
         * @var array{valueSet:array<SymbolKind::*>}|null
         */
        public ?array $symbolKind = null,
        /**
         * The client supports tags on `SymbolInformation`.
         * Clients supporting tags have to handle unknown tags gracefully.
         *
         * @var array{valueSet:array<SymbolTag::*>}|null
         */
        public ?array $tagSupport = null,
        /**
         * The client support partial workspace symbols. The client will send the
         * request `workspaceSymbol/resolve` to the server to resolve additional
         * properties.
         *
         * @var array{properties:array<string>}|null
         */
        public ?array $resolveSupport = null,
    ) {
    }
}