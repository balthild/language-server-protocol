<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['union' => [['literal' => 1], ['literal' => 2], ['literal' => 3]]])]
        public $triggerKind,
        /**
         * The trigger character (a single character) that has trigger code complete.
         * Is undefined if `triggerKind !== CompletionTriggerKind.TriggerCharacter`
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $triggerCharacter = null
    ) {}
}
