<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkspaceFullDocumentDiagnosticReport implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A full document diagnostic report.
         *
         * @var "full"
         */
        #[Shape(['literal' => 'full'])]
        public $kind,
        /**
         * The actual items.
         *
         * @var list<Diagnostic>
         */
        #[Shape(['list' => ['class' => Diagnostic::class]])]
        public array $items,
        /**
         * The URI for which diagnostic information is reported.
         */
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        /**
         * An optional result id. If provided it will
         * be sent on the next diagnostic request for the
         * same document.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $resultId = null,
        /**
         * The version number for which the diagnostics are reported.
         * If the document is not marked as open `null` can be provided.
         *
         * @var int|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['literal' => null]]], ['scalar' => 'null']]])]
        public $version = null
    ) {
        $this->uri = urldecode($uri);
    }
}
