<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Registration options for a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkspaceSymbolOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class WorkspaceSymbolRegistrationOptions extends WorkspaceSymbolOptions
{
    public function __construct(
        /**
         * The server provides support to resolve additional
         * information for a workspace symbol.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $resolveProvider = null,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
