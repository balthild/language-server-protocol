<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Contains additional diagnostic information about the context in which
 * a [code action](#CodeActionProvider.provideCodeActions) is run.
 */
class CodeActionContext implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An array of diagnostics known on the client side overlapping the range provided to the
         * `textDocument/codeAction` request. They are provided so that the server knows which
         * errors are currently presented to the user for the given range. There is no guarantee
         * that these accurately reflect the error state of the resource. The primary parameter
         * to compute code actions is the provided range.
         *
         * @var list<Diagnostic>
         */
        #[Deserialize(Diagnostic::class, iterable: true)]
        public array $diagnostics,
        /**
         * Requested kind of actions to return.
         *
         * Actions not of this kind are filtered out by the client before being shown. So servers
         * can omit computing them.
         *
         * @var list<string>|null
         */
        public ?array $only = null,
        /**
         * The reason why code actions were requested.
         *
         * @var CodeActionTriggerKind::*|null
         */
        public $triggerKind = null
    ) {}
}
