<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

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
        public int $version,
        /**
         * The text document's uri.
         */
        public string $uri,
    ) {
        $this->uri = urldecode($uri);
    }
}