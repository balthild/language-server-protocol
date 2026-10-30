<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class SemanticTokensOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * The legend used by the server
         */
        #[Shape(SemanticTokensLegend::class)]
        public SemanticTokensLegend $legend,

        /**
         * Server supports providing semantic tokens for a specific range
         * of a document.
         *
         * @var bool|array{}|null
         */
        #[Shape(
            new Shape\Union(new Shape\Union(new Shape\Scalar('bool'), new Shape\Record()), new Shape\Scalar('null')),
        )]
        public $range = null,

        /**
         * Server supports providing semantic tokens for a full document.
         *
         * @var bool|array{delta?: bool}|null
         */
        #[Shape(
            new Shape\Union(new Shape\Union(new Shape\Scalar('bool'), new Shape\Record()), new Shape\Scalar('null')),
        )]
        public $full = null,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
