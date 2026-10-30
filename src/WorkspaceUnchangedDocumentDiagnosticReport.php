<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(new Shape\Literal('unchanged'))]
        public $kind,

        /**
         * A result id which will be sent on the next
         * diagnostic request for the same document.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $resultId,

        /**
         * The URI for which diagnostic information is reported.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * The version number for which the diagnostics are reported.
         * If the document is not marked as open `null` can be provided.
         *
         * @var int|null
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public $version = null
    ) {
        $this->uri = urldecode($uri);
    }
}
