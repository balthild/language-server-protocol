<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A text document identifier to optionally denote a specific version of a text document.
 *
 * Mixins (implemented TS interfaces): TextDocumentIdentifier
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class OptionalVersionedTextDocumentIdentifier extends TextDocumentIdentifier
{
    public function __construct(
        /**
         * The text document's uri.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * The version number of this document. If a versioned text document identifier
         * is sent from the server to the client and the file is not open in the editor
         * (the server has not received an open notification before) the server can send
         * `null` to indicate that the version is unknown and the content on disk is the
         * truth (as specified with document content ownership).
         *
         * @var int|null
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public $version = null
    ) {
        $this->uri = \urldecode($uri);
    }
}
