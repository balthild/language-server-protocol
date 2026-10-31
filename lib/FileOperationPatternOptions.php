<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

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
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $ignoreCase = null
    ) {}
}
