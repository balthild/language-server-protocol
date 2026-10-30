<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class DidChangeConfigurationRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var string|list<string>|null
         */
        #[Shape([
            'union' => [
                ['union' => [['scalar' => 'string'], ['list' => ['scalar' => 'string']]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $section = null
    ) {}
}
