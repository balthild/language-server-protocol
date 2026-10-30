<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * The parameters of a [DocumentLinkRequest](#DocumentLinkRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class DocumentLinkParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The document to provide document links for.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        public $partialResultToken = null
    ) {}
}
