<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Registration options for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentRegistrationOptions, SignatureHelpOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 */
class SignatureHelpRegistrationOptions extends TextDocumentRegistrationOptions
{
    public function __construct(
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
         * List of characters that trigger signature help automatically.
         *
         * @var list<string>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('string')), new Shape\Scalar('null')))]
        public ?array $triggerCharacters = null,
        /**
         * List of characters that re-trigger signature help.
         *
         * These trigger characters are only active when signature help is already showing. All trigger characters
         * are also counted as re-trigger characters.
         *
         * @var list<string>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('string')), new Shape\Scalar('null')))]
        public ?array $retriggerCharacters = null,
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
