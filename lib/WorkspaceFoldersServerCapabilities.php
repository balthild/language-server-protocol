<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.workspaceFolder.d.ts
 */
class WorkspaceFoldersServerCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The server has support for workspace folders
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
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
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('bool')),
                new Shape\Scalar('null'),
            ),
        )]
        public $changeNotifications = null
    ) {}
}
