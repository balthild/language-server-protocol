<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Provider options for a [DocumentFormattingRequest](#DocumentFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class DocumentFormattingOptions extends WorkDoneProgressOptions
{
    public function __construct(
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
