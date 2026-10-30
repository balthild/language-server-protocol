<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions, TextDocumentRegistrationOptions, StaticRegistrationOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 */
class InlineValueRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null,
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
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $id = null
    ) {}
}
