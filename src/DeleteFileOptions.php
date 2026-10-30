<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $recursive = null,

        /**
         * Ignore the operation if the file doesn't exist.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $ignoreIfNotExists = null
    ) {}
}
