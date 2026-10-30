<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Capabilities relating to events from file operations by the user in the client.
 *
 * These events do not come from the file system, they come from user operations
 * like renaming a file in the UI.
 */
class FileOperationClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether the client supports dynamic registration for file requests/notifications.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client has support for sending didCreateFiles notifications.
         */
        public ?bool $didCreate = null,
        /**
         * The client has support for sending willCreateFiles requests.
         */
        public ?bool $willCreate = null,
        /**
         * The client has support for sending didRenameFiles notifications.
         */
        public ?bool $didRename = null,
        /**
         * The client has support for sending willRenameFiles requests.
         */
        public ?bool $willRename = null,
        /**
         * The client has support for sending didDeleteFiles notifications.
         */
        public ?bool $didDelete = null,
        /**
         * The client has support for sending willDeleteFiles requests.
         */
        public ?bool $willDelete = null
    ) {}
}
