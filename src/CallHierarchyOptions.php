<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Call hierarchy options used during static registration.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CallHierarchyOptions extends WorkDoneProgressOptions
{
    public function __construct(
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
