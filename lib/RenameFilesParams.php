<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters sent in notifications/requests for user-initiated renames of
 * files.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
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
        #[Shape(new Shape\Sequence(FileRename::class))]
        public array $files
    ) {}
}
