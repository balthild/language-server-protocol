<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $resolveProvider = null,
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
