<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Describe options to be used when registered for text document change events.
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 */
class TextDocumentChangeRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * How documents are synced to the server.
         *
         * @var TextDocumentSyncKind::*
         */
        #[Shape(new Shape\Union(new Shape\Literal(0), new Shape\Literal(1), new Shape\Literal(2)))]
        public $syncKind,

        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var list<(string|DocumentFilter)>|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Sequence(
                    new Shape\Union(
                        new Shape\Scalar('string'),
                        new Shape\Any(),
                        new Shape\Any(),
                        new Shape\Any(),
                        new Shape\Any(),
                    ),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentSelector = null
    ) {}
}
