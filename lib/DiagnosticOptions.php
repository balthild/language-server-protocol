<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.diagnostic.d.ts
 */
class DiagnosticOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether the language has inter file dependencies meaning that
         * editing code in one file can result in a different diagnostic
         * set in another file. Inter file dependencies are common for
         * most programming languages and typically uncommon for linters.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $interFileDependencies,

        /**
         * The server provides support for workspace diagnostics as well.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $workspaceDiagnostics,

        /**
         * An optional identifier under which the diagnostics are
         * managed by the client.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $identifier = null,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
