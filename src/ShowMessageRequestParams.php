<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class ShowMessageRequestParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The message type. See {@link MessageType}
         *
         * @var MessageType::*
         */
        #[Shape(['union' => [['literal' => 1], ['literal' => 2], ['literal' => 3], ['literal' => 4]]])]
        public $type,
        /**
         * The actual message.
         */
        #[Shape(['scalar' => 'string'])]
        public string $message,
        /**
         * The message action items to present.
         *
         * @var list<MessageActionItem>|null
         */
        #[Shape(['union' => [['list' => ['class' => MessageActionItem::class]], ['scalar' => 'null']]])]
        public ?array $actions = null
    ) {}
}
