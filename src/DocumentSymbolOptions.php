<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Provider options for a [DocumentSymbolRequest](#DocumentSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentSymbolOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * A human-readable string that is shown when multiple outlines trees
         * are shown for the same document.
         */
        public ?string $label = null,
        public ?bool $workDoneProgress = null,
    ) {
    }
}