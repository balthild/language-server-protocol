<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @phpstan-type FullDocumentDiagnosticReport array{kind: "full", resultId?: string, items: list<Diagnostic>}
 *
 * @phpstan-type UnchangedDocumentDiagnosticReport array{kind: "unchanged", resultId: string}
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.diagnostic.d.ts
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
        #[Shape(new Shape\Literal('full'))]
        public $kind,

        /**
         * The actual items.
         *
         * @var list<Diagnostic>
         */
        #[Shape(new Shape\Sequence(Diagnostic::class))]
        public array $items,

        /**
         * An optional result id. If provided it will
         * be sent on the next diagnostic request for the
         * same document.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
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
        #[Shape(
            new Shape\Union(
                new Shape\Map(
                    new Shape\Scalar('string'),
                    new Shape\Union(new Shape\Struct([
                        'kind' => new Shape\Literal('full'),
                        'resultId?' => new Shape\Scalar('string'),
                        'items' => new Shape\Sequence(Diagnostic::class),
                    ]), new Shape\Record()),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public ?array $relatedDocuments = null
    ) {}
}
