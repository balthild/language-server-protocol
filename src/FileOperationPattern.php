<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A pattern to describe in which file operation requests or notifications
 * the server is interested in receiving.
 */
class FileOperationPattern implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The glob pattern to match. Glob patterns can have the following syntax:
         * - `*` to match one or more characters in a path segment
         * - `?` to match on one character in a path segment
         * - `**` to match any number of path segments, including none
         * - `{}` to group sub patterns into an OR expression. (e.g. `**​/*.{ts,js}` matches all TypeScript and JavaScript files)
         * - `[]` to declare a range of characters to match in a path segment (e.g., `example.[0-9]` to match on `example.0`, `example.1`, …)
         * - `[!...]` to negate a range of characters to match in a path segment (e.g., `example.[!0-9]` to match on `example.a`, `example.b`, but not `example.0`)
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $glob,
        /**
         * Whether to match files or folders with this pattern.
         *
         * Matches both if undefined.
         *
         * @var FileOperationPatternKind::*|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Literal('file'), new Shape\Literal('folder')),
                new Shape\Scalar('null'),
            ),
        )]
        public $matches = null,
        /**
         * Additional options used during matching.
         */
        #[Shape(new Shape\Union(FileOperationPatternOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationPatternOptions $options = null
    ) {}
}
