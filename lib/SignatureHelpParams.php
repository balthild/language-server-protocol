<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Parameters for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class SignatureHelpParams extends TextDocumentPositionParams
{
    public function __construct(
        /**
         * The text document.
         */
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * The position inside the text document.
         */
        #[Shape(Position::class)]
        public Position $position,

        /**
         * The signature help context. This is only available if the client specifies
         * to send this using the client capability `textDocument.signatureHelp.contextSupport === true`
         */
        #[Shape(new Shape\Union(SignatureHelpContext::class, new Shape\Scalar('null')))]
        public ?SignatureHelpContext $context = null,

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
        public $workDoneToken = null
    ) {}
}
