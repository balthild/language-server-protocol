<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Provider options for a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class RenameOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Renames should be checked and tested before being executed.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $prepareProvider = null,
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
