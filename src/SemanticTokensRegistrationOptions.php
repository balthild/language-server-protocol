<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, SemanticTokensOptions, StaticRegistrationOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 */
class SemanticTokensRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * The legend used by the server
         */
        #[Shape(SemanticTokensLegend::class)]
        public SemanticTokensLegend $legend,

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
        public $documentSelector = null,

        /**
         * Server supports providing semantic tokens for a specific range
         * of a document.
         *
         * @var bool|array{}|null
         */
        #[Shape(new Shape\Union(new Shape\Union(new Shape\Scalar('bool'), new Shape\Any()), new Shape\Scalar('null')))]
        public $range = null,

        /**
         * Server supports providing semantic tokens for a full document.
         *
         * @var bool|array{delta?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Union(new Shape\Scalar('bool'), new Shape\Any()), new Shape\Scalar('null')))]
        public $full = null,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null,

        /**
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $id = null
    ) {}
}
