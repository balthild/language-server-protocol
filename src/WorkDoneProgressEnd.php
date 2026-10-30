<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkDoneProgressEnd implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var 'end'
         */
        #[Shape(['literal' => 'end'])]
        public $kind,
        /**
         * Optional, a final message indicating to for example indicate the outcome
         * of the operation.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $message = null
    ) {}
}
