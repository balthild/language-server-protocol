<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Options for notifications/requests for user operations on files.
 */
class FileOperationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The server is interested in receiving didCreateFiles notifications.
         */
        #[Deserialize(FileOperationRegistrationOptions::class)]
        public ?FileOperationRegistrationOptions $didCreate = null,
        /**
         * The server is interested in receiving willCreateFiles requests.
         */
        #[Deserialize(FileOperationRegistrationOptions::class)]
        public ?FileOperationRegistrationOptions $willCreate = null,
        /**
         * The server is interested in receiving didRenameFiles notifications.
         */
        #[Deserialize(FileOperationRegistrationOptions::class)]
        public ?FileOperationRegistrationOptions $didRename = null,
        /**
         * The server is interested in receiving willRenameFiles requests.
         */
        #[Deserialize(FileOperationRegistrationOptions::class)]
        public ?FileOperationRegistrationOptions $willRename = null,
        /**
         * The server is interested in receiving didDeleteFiles file notifications.
         */
        #[Deserialize(FileOperationRegistrationOptions::class)]
        public ?FileOperationRegistrationOptions $didDelete = null,
        /**
         * The server is interested in receiving willDeleteFiles file requests.
         */
        #[Deserialize(FileOperationRegistrationOptions::class)]
        public ?FileOperationRegistrationOptions $willDelete = null
    ) {}
}
