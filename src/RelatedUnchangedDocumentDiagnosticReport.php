<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class RelatedUnchangedDocumentDiagnosticReport implements ArrayDeserializable
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
         * Diagnostics of related documents. This information is useful
         * in programming languages where code in a file A can generate
         * diagnostics in a file B which A depends on. An example of
         * such a language is C/C++ where marco definitions in a file
         * a.cpp and result in errors in a header file b.hpp.
         *
         * @var array<string, array{kind: "full", resultId?: string, items: list<Diagnostic>}|array{kind: "unchanged", resultId: string}>|null
         */
        public ?array $relatedDocuments = null
    ) {}
}
