<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents information on a file/folder rename.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
class FileRename implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A file:// URI for the original location of the file/folder being renamed.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $oldUri,

        /**
         * A file:// URI for the new location of the file/folder being renamed.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $newUri
    ) {}
}
