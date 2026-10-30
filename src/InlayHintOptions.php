<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class InlayHintOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The server provides support to resolve additional
         * information for an inlay hint item.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null
    ) {}
}
