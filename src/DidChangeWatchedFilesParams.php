<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The watched files change notification's parameters.
 */
class DidChangeWatchedFilesParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual file events.
         *
         * @var list<FileEvent>
         */
        #[Deserialize(FileEvent::class, iterable: true)]
        public array $changes
    ) {}
}
