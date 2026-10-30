<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkspaceFoldersServerCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The server has support for workspace folders
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $supported = null,
        /**
         * Whether the server wants to receive workspace folder
         * change notifications.
         *
         * If a string is provided the string is treated as an ID
         * under which the notification is registered on the client
         * side. The ID can be used to unregister for these events
         * using the `client/unregisterCapability` request.
         *
         * @var string|bool|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'string'], ['scalar' => 'bool']]], ['scalar' => 'null']]])]
        public $changeNotifications = null
    ) {}
}
