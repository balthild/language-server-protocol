<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * A text document identifier to optionally denote a specific version of a text document.
 *
 * Mixins (implemented TS interfaces): TextDocumentIdentifier
 */
class OptionalVersionedTextDocumentIdentifier extends TextDocumentIdentifier
{
    public function __construct(
        /**
         * The text document's uri.
         */
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
        public $version = null
    ) {
        $this->uri = urldecode($uri);
    }
}
