<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Save registration options.
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, SaveOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 */
class TextDocumentSaveRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
        /**
         * A document selector to identify the scope of the registration. If set to null
         * the document selector provided on the client side will be used.
         *
         * @var list<(string|DocumentFilter)>|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        [
                            'list' => [
                                'union' => [
                                    ['scalar' => 'string'],
                                    ['any' => null],
                                    ['any' => null],
                                    ['any' => null],
                                    ['any' => null],
                                ],
                            ],
                        ],
                        ['literal' => null],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $documentSelector = null,
        /**
         * The client is supposed to include the content on save.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $includeText = null
    ) {}
}
