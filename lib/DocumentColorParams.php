<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Parameters for a [DocumentColorRequest](#DocumentColorRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.colorProvider.d.ts
 */
class DocumentColorParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The text document.
         */
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $workDoneToken = null,

        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $partialResultToken = null
    ) {}
}
