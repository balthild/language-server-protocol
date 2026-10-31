<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Provider options for a [RenameRequest](#RenameRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
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
