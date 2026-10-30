<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkDoneProgressEnd implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var 'end'
         */
        public $kind,
        /**
         * Optional, a final message indicating to for example indicate the outcome
         * of the operation.
         */
        public ?string $message = null
    ) {}
}
