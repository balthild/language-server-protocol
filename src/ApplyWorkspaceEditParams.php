<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters passed via a apply workspace edit request.
 */
class ApplyWorkspaceEditParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The edits to apply.
         */
        #[Deserialize(WorkspaceEdit::class)]
        public WorkspaceEdit $edit,
        /**
         * An optional label of the workspace edit. This label is
         * presented in the user interface for example on an undo
         * stack to undo the workspace edit.
         */
        public ?string $label = null
    ) {}
}
