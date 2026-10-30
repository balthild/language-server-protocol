<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Rename file options
 */
class RenameFileOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Overwrite target if existing. Overwrite wins over `ignoreIfExists`
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $overwrite = null,
        /**
         * Ignores if target exists.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $ignoreIfExists = null
    ) {}
}
