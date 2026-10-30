<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkspaceSymbolOptions
 */
class WorkspaceSymbolRegistrationOptions extends WorkspaceSymbolOptions
{
    public function __construct(
        /**
         * The server provides support to resolve additional
         * information for a workspace symbol.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null
    ) {}
}
