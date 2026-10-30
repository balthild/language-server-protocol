<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class MessageActionItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A short title like 'Retry', 'Open Log' etc.
         */
        public string $title,
    ) {
    }
}