<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class RegistrationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<Registration>
         */
        #[Shape(new Shape\Sequence(Registration::class))]
        public array $registrations
    ) {}
}
