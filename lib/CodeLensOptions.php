<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Code Lens provider options of a [CodeLensRequest](#CodeLensRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class CodeLensOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Code lens has a resolve provider as well.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $resolveProvider = null,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
