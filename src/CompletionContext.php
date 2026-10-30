<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Contains additional information about the context in which a completion request is triggered.
 */
class CompletionContext implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * How the completion was triggered.
         *
         * @var CompletionTriggerKind::*
         */
        public $triggerKind,
        /**
         * The trigger character (a single character) that has trigger code complete.
         * Is undefined if `triggerKind !== CompletionTriggerKind.TriggerCharacter`
         */
        public ?string $triggerCharacter = null,
    ) {
    }
}