<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class PartialResultParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $partialResultToken = null
    ) {}
}
