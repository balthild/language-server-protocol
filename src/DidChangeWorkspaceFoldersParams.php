<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a `workspace/didChangeWorkspaceFolders` notification.
 */
class DidChangeWorkspaceFoldersParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual workspace folder change event.
         */
        #[Shape(['class' => WorkspaceFoldersChangeEvent::class])]
        public WorkspaceFoldersChangeEvent $event
    ) {}
}
