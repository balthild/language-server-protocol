<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * General parameters to to register for an notification or to register a provider.
 */
class Registration implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The id used to register the request. The id can be used to deregister
         * the request again.
         */
        #[Shape(['scalar' => 'string'])]
        public string $id,
        /**
         * The method / capability to register for.
         */
        #[Shape(['scalar' => 'string'])]
        public string $method,
        /**
         * Options necessary for the registration.
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $registerOptions = null
    ) {}
}
