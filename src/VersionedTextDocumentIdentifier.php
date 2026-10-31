<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A text document identifier to denote a specific version of a text document.
 *
 * Mixins (implemented TS interfaces): TextDocumentIdentifier
 */
class VersionedTextDocumentIdentifier extends TextDocumentIdentifier
{
    public function __construct(
        /**
         * The version number of this document.
         */
        #[Shape(new Shape\Scalar('int'))]
        public int $version,

        /**
         * The text document's uri.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri
    ) {
        $this->uri = \urldecode($uri);
    }
}
