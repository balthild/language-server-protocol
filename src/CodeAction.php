<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * A code action represents a change that can be performed in code, e.g. to fix a problem or
 * to refactor code.
 * 
 * A CodeAction must set either `edit` and/or a `command`. If both are supplied, the `edit` is applied first, then the `command` is executed.
 */
class CodeAction implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A short, human-readable, title for this code action.
         */
        public string $title,
        /**
         * The kind of the code action.
         * 
         * Used to filter code actions.
         */
        public ?string $kind = null,
        /**
         * The diagnostics that this code action resolves.
         *
         * @var array<Diagnostic>|null
         */
        #[Deserialize(Diagnostic::class, iterable: true)]
        public ?array $diagnostics = null,
        /**
         * Marks this as a preferred action. Preferred actions are used by the `auto fix` command and can be targeted
         * by keybindings.
         * 
         * A quick fix should be marked preferred if it properly addresses the underlying error.
         * A refactoring should be marked preferred if it is the most reasonable choice of actions to take.
         */
        public ?bool $isPreferred = null,
        /**
         * Marks that the code action cannot currently be applied.
         * 
         * Clients should follow the following guidelines regarding disabled code actions:
         * 
         *   - Disabled code actions are not shown in automatic [lightbulbs](https://code.visualstudio.com/docs/editor/editingevolved#_code-action)
         *     code action menus.
         * 
         *   - Disabled actions are shown as faded out in the code action menu when the user requests a more specific type
         *     of code action, such as refactorings.
         * 
         *   - If the user has a [keybinding](https://code.visualstudio.com/docs/editor/refactoring#_keybindings-for-code-actions)
         *     that auto applies a code action and only disabled code actions are returned, the client should show the user an
         *     error message with `reason` in the editor.
         *
         * @var array{reason:string}|null
         */
        public ?array $disabled = null,
        /**
         * The workspace edit this code action performs.
         */
        #[Deserialize(WorkspaceEdit::class)]
        public ?WorkspaceEdit $edit = null,
        /**
         * A command this code action executes. If a code action
         * provides an edit and a command, first the edit is
         * executed and then the command.
         */
        #[Deserialize(Command::class)]
        public ?Command $command = null,
        /**
         * A data entry field that is preserved on a code action between
         * a `textDocument/codeAction` and a `codeAction/resolve` request.
         *
         * @var mixed|null
         */
        public $data = null,
    ) {
    }
}