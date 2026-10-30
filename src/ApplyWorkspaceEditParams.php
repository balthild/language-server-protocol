<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['class' => WorkspaceEdit::class])]
        public WorkspaceEdit $edit,
        /**
         * An optional label of the workspace edit. This label is
         * presented in the user interface for example on an undo
         * stack to undo the workspace edit.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $label = null
    ) {}
}
