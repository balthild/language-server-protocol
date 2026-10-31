<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Value-object describing what options formatting should use.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class FormattingOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Size of a tab in spaces.
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $tabSize,

        /**
         * Prefer spaces over tabs.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $insertSpaces,

        /**
         * Trim trailing whitespace on a line.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $trimTrailingWhitespace = null,

        /**
         * Insert a newline character at the end of the file if one does not exist.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $insertFinalNewline = null,

        /**
         * Trim all newlines after the final newline at the end of the file.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $trimFinalNewlines = null
    ) {}
}
