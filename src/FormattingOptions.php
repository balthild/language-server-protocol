<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public int $tabSize,
        /**
         * Prefer spaces over tabs.
         */
        public bool $insertSpaces,
        /**
         * Trim trailing whitespace on a line.
         */
        public ?bool $trimTrailingWhitespace = null,
        /**
         * Insert a newline character at the end of the file if one does not exist.
         */
        public ?bool $insertFinalNewline = null,
        /**
         * Trim all newlines after the final newline at the end of the file.
         */
        public ?bool $trimFinalNewlines = null
    ) {}
}
