<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkDoneProgressOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        public ?bool $workDoneProgress = null,
    ) {
    }
}