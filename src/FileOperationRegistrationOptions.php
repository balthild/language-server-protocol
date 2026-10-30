<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The options to register for file operations.
 */
class FileOperationRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual filters.
         *
         * @var list<FileOperationFilter>
         */
        #[Shape(new Shape\Sequence(FileOperationFilter::class))]
        public array $filters
    ) {}
}
