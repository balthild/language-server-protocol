<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Code Lens provider options of a [CodeLensRequest](#CodeLensRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CodeLensOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Code lens has a resolve provider as well.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $resolveProvider = null,
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
