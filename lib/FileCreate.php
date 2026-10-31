<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents information on a file/folder create.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
class FileCreate implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A file:// URI for the location of the file/folder being created.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri
    ) {}
}
