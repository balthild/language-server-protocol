<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents information on a file/folder rename.
 */
class FileRename implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A file:// URI for the original location of the file/folder being renamed.
         */
        public string $oldUri,
        /**
         * A file:// URI for the new location of the file/folder being renamed.
         */
        public string $newUri
    ) {}
}
