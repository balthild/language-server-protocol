<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class UnregistrationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<Unregistration>
         */
        #[Shape(new Shape\Sequence(Unregistration::class))]
        public array $unregisterations
    ) {}
}
