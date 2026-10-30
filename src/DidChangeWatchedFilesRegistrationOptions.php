<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
         * @var array<FileSystemWatcher>
         */
        #[Deserialize(FileSystemWatcher::class, iterable: true)]
        public array $watchers
    ) {}
}
