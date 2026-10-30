<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The data type of the ResponseError if the
 * initialize request fails.
 */
class InitializeError implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Indicates whether the client execute the following retry logic:
         * (1) show the message provided by the ResponseError to the user
         * (2) user selects retry or cancel
         * (3) if user selected retry the initialize method is sent again.
         */
        public bool $retry
    ) {}
}
