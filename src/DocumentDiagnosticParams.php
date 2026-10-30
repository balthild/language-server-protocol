<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class DocumentDiagnosticParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * The additional identifier  provided during registration.
         */
        public ?string $identifier = null,
        /**
         * The result id of a previous response if provided.
         */
        public ?string $previousResultId = null,
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
