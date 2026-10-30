<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(new Shape\Sequence(FileEvent::class))]
        public array $changes
    ) {}
}
