<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Provider options for a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class RenameOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Renames should be checked and tested before being executed.
         */
        public ?bool $prepareProvider = null,
        public ?bool $workDoneProgress = null,
    ) {
    }
}