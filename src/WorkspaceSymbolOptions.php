<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Server capabilities for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class WorkspaceSymbolOptions extends WorkDoneProgressOptions
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
