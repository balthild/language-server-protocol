<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Matching options for the file operation pattern.
 */
class FileOperationPatternOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The pattern should be matched ignoring casing.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $ignoreCase = null
    ) {}
}
