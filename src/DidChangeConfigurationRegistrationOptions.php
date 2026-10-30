<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class DidChangeConfigurationRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var string|list<string>|null
         */
        public $section = null
    ) {}
}
