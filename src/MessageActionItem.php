<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class MessageActionItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A short title like 'Retry', 'Open Log' etc.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $title
    ) {}
}
