<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class HoverClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether hover supports dynamic registration.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $dynamicRegistration = null,
        /**
         * Client supports the following content formats for the content
         * property. The order describes the preferred format of the client.
         *
         * @var list<MarkupKind::*>|null
         */
        #[Shape([
            'union' => [
                ['list' => ['union' => [['literal' => 'plaintext'], ['literal' => 'markdown']]]],
                ['scalar' => 'null'],
            ],
        ])]
        public ?array $contentFormat = null
    ) {}
}
