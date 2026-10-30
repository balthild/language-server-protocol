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
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $overwrite = null,
        /**
         * Ignores if target exists.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $ignoreIfExists = null
    ) {}
}
