<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Options to create a file.
 */
class CreateFileOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Overwrite existing file. Overwrite wins over `ignoreIfExists`
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $overwrite = null,

        /**
         * Ignore if exists.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $ignoreIfExists = null
    ) {}
}
