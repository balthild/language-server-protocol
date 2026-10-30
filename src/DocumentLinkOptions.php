<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Provider options for a [DocumentLinkRequest](#DocumentLinkRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentLinkOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Document links have a resolve provider as well.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null
    ) {}
}
