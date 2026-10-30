<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Parameters for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): TextDocumentPositionParams, WorkDoneProgressParams
 */
class SignatureHelpParams extends TextDocumentPositionParams
{
    public function __construct(
        /**
         * The text document.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * The position inside the text document.
         */
        #[Deserialize(Position::class)]
        public Position $position,
        /**
         * The signature help context. This is only available if the client specifies
         * to send this using the client capability `textDocument.signatureHelp.contextSupport === true`
         */
        #[Deserialize(SignatureHelpContext::class)]
        public ?SignatureHelpContext $context = null,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null,
    ) {
    }
}