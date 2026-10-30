<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The workspace folder change event.
 */
class WorkspaceFoldersChangeEvent implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The array of added workspace folders
         *
         * @var array<WorkspaceFolder>
         */
        #[Deserialize(WorkspaceFolder::class, iterable: true)]
        public array $added,
        /**
         * The array of the removed workspace folders
         *
         * @var array<WorkspaceFolder>
         */
        #[Deserialize(WorkspaceFolder::class, iterable: true)]
        public array $removed,
    ) {
    }
}