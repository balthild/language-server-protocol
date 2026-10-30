<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client capabilities for the showDocument request.
 */
class ShowDocumentClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The client has support for the showDocument
         * request.
         */
        #[Shape(['scalar' => 'bool'])]
        public bool $support
    ) {}
}
