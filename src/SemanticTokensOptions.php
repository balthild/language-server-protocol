<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class SemanticTokensOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * The legend used by the server
         */
        #[Deserialize(SemanticTokensLegend::class)]
        public SemanticTokensLegend $legend,
        /**
         * Server supports providing semantic tokens for a specific range
         * of a document.
         *
         * @var bool|array{}|null
         */
        public $range = null,
        /**
         * Server supports providing semantic tokens for a full document.
         *
         * @var bool|array{delta?: bool}|null
         */
        public $full = null,
        public ?bool $workDoneProgress = null
    ) {}
}
