<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents information on a file/folder create.
 */
class FileCreate implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A file:// URI for the location of the file/folder being created.
         */
        #[Shape(['scalar' => 'string'])]
        public string $uri
    ) {}
}
