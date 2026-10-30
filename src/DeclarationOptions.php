<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DeclarationOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null,
    ) {
    }
}