<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class WorkspaceDiagnosticParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The currently known diagnostic reports with their
         * previous result ids.
         *
         * @var list<array{uri: string, value: string}>
         */
        public array $previousResultIds,
        /**
         * The additional identifier provided during registration.
         */
        public ?string $identifier = null,
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
