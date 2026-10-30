<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Provider options for a [DocumentFormattingRequest](#DocumentFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentFormattingOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null
    ) {}
}
