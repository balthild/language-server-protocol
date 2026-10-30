<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkspaceUnchangedDocumentDiagnosticReport implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A document diagnostic report indicating
         * no changes to the last result. A server can
         * only return `unchanged` if result ids are
         * provided.
         *
         * @var "unchanged"
         */
        public $kind,
        /**
         * A result id which will be sent on the next
         * diagnostic request for the same document.
         */
        public string $resultId,
        /**
         * The URI for which diagnostic information is reported.
         */
        public string $uri,
        /**
         * The version number for which the diagnostics are reported.
         * If the document is not marked as open `null` can be provided.
         *
         * @var int|null
         */
        public $version = null
    ) {
        $this->uri = urldecode($uri);
    }
}
