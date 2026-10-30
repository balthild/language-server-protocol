<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Provider options for a [DocumentHighlightRequest](#DocumentHighlightRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentHighlightOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null
    ) {}
}
