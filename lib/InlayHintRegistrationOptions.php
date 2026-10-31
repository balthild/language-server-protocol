<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): InlayHintOptions, TextDocumentRegistrationOptions, StaticRegistrationOptions
 *
 * @phpstan-type TextDocumentFilter array{language: string, scheme?: string, pattern?: string}|array{language?: string, scheme: string, pattern?: string}|array{language?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 *
 * @phpstan-type NotebookCellTextDocumentFilter array{notebook: string|NotebookDocumentFilter, language?: string}
 *
 * @phpstan-type DocumentFilter TextDocumentFilter|NotebookCellTextDocumentFilter
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.inlayHint.d.ts
 */
class InlayHintRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

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
                        new Shape\Record(),
                        new Shape\Record(),
                        new Shape\Record(),
                        new Shape\Record(),
                    ),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentSelector = null,

        /**
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $id = null
    ) {}
}
