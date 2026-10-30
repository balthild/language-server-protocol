<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkDoneProgressCancelParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The token to be used to report progress.
         *
         * @var int|string
         */
        public $token
    ) {}
}
