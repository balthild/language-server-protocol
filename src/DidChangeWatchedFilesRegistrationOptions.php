<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['list' => ['class' => FileSystemWatcher::class]])]
        public array $watchers
    ) {}
}
