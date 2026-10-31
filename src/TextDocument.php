<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A simple text document. Not to be implemented. The document keeps the content
 * as string.
 */
class TextDocument implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The associated URI for this document. Most documents have the __file__-scheme, indicating that they
         * represent files on disk. However, some documents may have other schemes indicating that they are not
         * available on disk.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * The identifier of the language associated with this document.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $languageId,

        /**
         * The version number of this document (it will increase after each
         * change, including undo/redo).
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $version,

        /**
         * The number of lines in this document.
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $lineCount
    ) {
        $this->uri = urldecode($uri);
    }
}
