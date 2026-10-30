<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $uri,
        /**
         * The identifier of the language associated with this document.
         */
        public string $languageId,
        /**
         * The version number of this document (it will increase after each
         * change, including undo/redo).
         */
        public int $version,
        /**
         * The number of lines in this document.
         */
        public int $lineCount,
    ) {
        $this->uri = urldecode($uri);
    }
}