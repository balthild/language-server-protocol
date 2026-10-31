<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Describe options to be used when registered for text document change events.
 */
class DidChangeWatchedFilesRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The watchers to register.
         *
         * @var list<FileSystemWatcher>
         */
        #[Shape(new Shape\Sequence(FileSystemWatcher::class))]
        public array $watchers
    ) {}
}
