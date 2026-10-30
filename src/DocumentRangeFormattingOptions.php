<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Provider options for a [DocumentRangeFormattingRequest](#DocumentRangeFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentRangeFormattingOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null,
    ) {
    }
}