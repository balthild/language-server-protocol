<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Registration options for a [CompletionRequest](#CompletionRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, CompletionOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 */
class CompletionRegistrationOptions extends TextDocumentRegistrationOptions
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
         * Most tools trigger completion request automatically without explicitly requesting
         * it using a keyboard shortcut (e.g. Ctrl+Space). Typically they do so when the user
         * starts to type an identifier. For example if the user types `c` in a JavaScript file
         * code complete will automatically pop up present `console` besides others as a
         * completion item. Characters that make up identifiers don't need to be listed here.
         *
         * If code complete should automatically be trigger on characters not being valid inside
         * an identifier (for example `.` in JavaScript) list them in `triggerCharacters`.
         *
         * @var list<string>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'string']], ['scalar' => 'null']]])]
        public ?array $triggerCharacters = null,
        /**
         * The list of all possible characters that commit a completion. This field can be used
         * if clients don't support individual commit characters per completion item. See
         * `ClientCapabilities.textDocument.completion.completionItem.commitCharactersSupport`
         *
         * If a server provides both `allCommitCharacters` and commit characters on an individual
         * completion item the ones on the completion item win.
         *
         * @var list<string>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'string']], ['scalar' => 'null']]])]
        public ?array $allCommitCharacters = null,
        /**
         * The server provides support to resolve additional
         * information for a completion item.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $resolveProvider = null,
        /**
         * The server supports the following `CompletionItem` specific
         * capabilities.
         *
         * @var array{labelDetailsSupport?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $completionItem = null,
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
