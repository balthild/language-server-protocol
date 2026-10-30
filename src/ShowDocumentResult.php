<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The result of a showDocument request.
 */
class ShowDocumentResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A boolean indicating if the show was successful.
         */
        #[Shape(['scalar' => 'bool'])]
        public bool $success
    ) {}
}
