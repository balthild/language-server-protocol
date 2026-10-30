<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * @phpstan-type FullDocumentDiagnosticReport array{kind: "full", resultId?: string, items: list<Diagnostic>}
 *
 * @phpstan-type UnchangedDocumentDiagnosticReport array{kind: "unchanged", resultId: string}
 */
class RelatedFullDocumentDiagnosticReport implements ArrayDeserializable
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
        #[Deserialize(Diagnostic::class, iterable: true)]
        public array $items,
        /**
         * An optional result id. If provided it will
         * be sent on the next diagnostic request for the
         * same document.
         */
        public ?string $resultId = null,
        /**
         * Diagnostics of related documents. This information is useful
         * in programming languages where code in a file A can generate
         * diagnostics in a file B which A depends on. An example of
         * such a language is C/C++ where marco definitions in a file
         * a.cpp and result in errors in a header file b.hpp.
         *
         * @var array<string, FullDocumentDiagnosticReport|UnchangedDocumentDiagnosticReport>|null
         */
        public ?array $relatedDocuments = null
    ) {}
}
