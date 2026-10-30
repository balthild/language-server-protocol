<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Delete file options
 */
class DeleteFileOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Delete the content recursively if a folder is denoted.
         */
        public ?bool $recursive = null,
        /**
         * Ignore the operation if the file doesn't exist.
         */
        public ?bool $ignoreIfNotExists = null,
    ) {
    }
}