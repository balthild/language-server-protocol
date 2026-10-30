<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Code Lens provider options of a [CodeLensRequest](#CodeLensRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CodeLensOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Code lens has a resolve provider as well.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null
    ) {}
}
