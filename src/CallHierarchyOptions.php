<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Call hierarchy options used during static registration.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CallHierarchyOptions extends WorkDoneProgressOptions
{
    public function __construct(
        public ?bool $workDoneProgress = null
    ) {}
}
