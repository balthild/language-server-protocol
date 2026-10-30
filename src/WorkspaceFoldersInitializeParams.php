<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkspaceFoldersInitializeParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The workspace folders configured in the client when the server starts.
         *
         * This property is only available if the client supports workspace folders.
         * It can be `null` if the client supports workspace folders but none are
         * configured.
         *
         * @var list<WorkspaceFolder>|null
         */
        #[Shape([
            'union' => [
                ['union' => [['list' => ['class' => WorkspaceFolder::class]], ['literal' => null]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $workspaceFolders = null
    ) {}
}
