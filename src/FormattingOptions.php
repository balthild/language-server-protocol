<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Value-object describing what options formatting should use.
 */
class FormattingOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Size of a tab in spaces.
         */
        #[Shape(['scalar' => 'int'])]
        public int $tabSize,
        /**
         * Prefer spaces over tabs.
         */
        #[Shape(['scalar' => 'bool'])]
        public bool $insertSpaces,
        /**
         * Trim trailing whitespace on a line.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $trimTrailingWhitespace = null,
        /**
         * Insert a newline character at the end of the file if one does not exist.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $insertFinalNewline = null,
        /**
         * Trim all newlines after the final newline at the end of the file.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $trimFinalNewlines = null
    ) {}
}
