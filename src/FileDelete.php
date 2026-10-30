<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents information on a file/folder delete.
 */
class FileDelete implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A file:// URI for the location of the file/folder being deleted.
         */
        public string $uri
    ) {}
}
