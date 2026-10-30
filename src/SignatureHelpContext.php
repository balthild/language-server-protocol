<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Additional information about the context in which a signature help request was triggered.
 */
class SignatureHelpContext implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Action that caused signature help to be triggered.
         *
         * @var SignatureHelpTriggerKind::*
         */
        #[Shape(['union' => [['literal' => 1], ['literal' => 2], ['literal' => 3]]])]
        public $triggerKind,
        /**
         * `true` if signature help was already showing when it was triggered.
         *
         * Retriggers occurs when the signature help is already active and can be caused by actions such as
         * typing a trigger character, a cursor move, or document content changes.
         */
        #[Shape(['scalar' => 'bool'])]
        public bool $isRetrigger,
        /**
         * Character that caused signature help to be triggered.
         *
         * This is undefined when `triggerKind !== SignatureHelpTriggerKind.TriggerCharacter`
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $triggerCharacter = null,
        /**
         * The currently active `SignatureHelp`.
         *
         * The `activeSignatureHelp` has its `SignatureHelp.activeSignature` field updated based on
         * the user navigating through available signatures.
         */
        #[Shape(['union' => [['class' => SignatureHelp::class], ['scalar' => 'null']]])]
        public ?SignatureHelp $activeSignatureHelp = null
    ) {}
}
