<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
         * @var array<FileOperationFilter>
         */
        #[Deserialize(FileOperationFilter::class, iterable: true)]
        public array $filters
    ) {}
}
