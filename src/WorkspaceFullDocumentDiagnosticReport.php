<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkspaceFullDocumentDiagnosticReport implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A full document diagnostic report.
         *
         * @var "full"
         */
        public $kind,
        /**
         * The actual items.
         *
         * @var list<Diagnostic>
         */
        #[Deserialize(Diagnostic::class, at: '[]')]
        public array $items,
        /**
         * The URI for which diagnostic information is reported.
         */
        public string $uri,
        /**
         * An optional result id. If provided it will
         * be sent on the next diagnostic request for the
         * same document.
         */
        public ?string $resultId = null,
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
