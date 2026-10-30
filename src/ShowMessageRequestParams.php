<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class ShowMessageRequestParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The message type. See {@link MessageType}
         *
         * @var MessageType::*
         */
        public $type,
        /**
         * The actual message.
         */
        public string $message,
        /**
         * The message action items to present.
         *
         * @var list<MessageActionItem>|null
         */
        #[Deserialize(MessageActionItem::class, at: '[]')]
        public ?array $actions = null
    ) {}
}
