<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The watched files change notification's parameters.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
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
