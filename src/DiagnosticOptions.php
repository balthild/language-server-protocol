<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
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
        public bool $interFileDependencies,
        /**
         * The server provides support for workspace diagnostics as well.
         */
        public bool $workspaceDiagnostics,
        /**
         * An optional identifier under which the diagnostics are
         * managed by the client.
         */
        public ?string $identifier = null,
        public ?bool $workDoneProgress = null
    ) {}
}
