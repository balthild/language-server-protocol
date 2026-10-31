<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

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
        #[Shape(new Shape\Union(new Shape\Literal(1), new Shape\Literal(2), new Shape\Literal(3)))]
        public $triggerKind,

        /**
         * The trigger character (a single character) that has trigger code complete.
         * Is undefined if `triggerKind !== CompletionTriggerKind.TriggerCharacter`
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $triggerCharacter = null
    ) {}
}
