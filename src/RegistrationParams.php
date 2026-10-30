<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class RegistrationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<Registration>
         */
        #[Deserialize(Registration::class, iterable: true)]
        public array $registrations
    ) {}
}
