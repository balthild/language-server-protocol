<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * A filter to describe in which file operation requests or notifications
 * the server is interested in receiving.
 */
class FileOperationFilter implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual file operation pattern.
         */
        #[Deserialize(FileOperationPattern::class)]
        public FileOperationPattern $pattern,
        /**
         * A Uri scheme like `file` or `untitled`.
         */
        public ?string $scheme = null
    ) {}
}
