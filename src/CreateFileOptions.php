<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public ?bool $overwrite = null,
        /**
         * Ignore if exists.
         */
        public ?bool $ignoreIfExists = null,
    ) {
    }
}