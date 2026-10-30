<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Hover options.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class HoverOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null
    ) {}
}
