<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class UnregistrationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var array<Unregistration>
         */
        #[Deserialize(Unregistration::class, iterable: true)]
        public array $unregisterations,
    ) {
    }
}