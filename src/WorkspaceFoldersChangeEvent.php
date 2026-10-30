<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
         * @var list<WorkspaceFolder>
         */
        #[Shape(new Shape\Sequence(WorkspaceFolder::class))]
        public array $added,
        /**
         * The array of the removed workspace folders
         *
         * @var list<WorkspaceFolder>
         */
        #[Shape(new Shape\Sequence(WorkspaceFolder::class))]
        public array $removed
    ) {}
}
