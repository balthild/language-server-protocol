<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters sent in notifications/requests for user-initiated renames of
 * files.
 */
class RenameFilesParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An array of all files/folders renamed in this operation. When a folder is renamed, only
         * the folder will be included, and not its children.
         *
         * @var list<FileRename>
         */
        #[Deserialize(FileRename::class, at: '[]')]
        public array $files
    ) {}
}
