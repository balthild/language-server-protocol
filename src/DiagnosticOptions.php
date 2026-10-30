<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['scalar' => 'bool'])]
        public bool $interFileDependencies,
        /**
         * The server provides support for workspace diagnostics as well.
         */
        #[Shape(['scalar' => 'bool'])]
        public bool $workspaceDiagnostics,
        /**
         * An optional identifier under which the diagnostics are
         * managed by the client.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $identifier = null,
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
