<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Save options.
 */
class SaveOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The client is supposed to include the content on save.
         */
        public ?bool $includeText = null,
    ) {
    }
}