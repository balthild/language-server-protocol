<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Server Capabilities for a [DefinitionRequest](#DefinitionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DefinitionOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null,
    ) {
    }
}