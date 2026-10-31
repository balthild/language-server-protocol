<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Options for notifications/requests for user operations on files.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
class FileOperationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The server is interested in receiving didCreateFiles notifications.
         */
        #[Shape(new Shape\Union(FileOperationRegistrationOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationRegistrationOptions $didCreate = null,

        /**
         * The server is interested in receiving willCreateFiles requests.
         */
        #[Shape(new Shape\Union(FileOperationRegistrationOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationRegistrationOptions $willCreate = null,

        /**
         * The server is interested in receiving didRenameFiles notifications.
         */
        #[Shape(new Shape\Union(FileOperationRegistrationOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationRegistrationOptions $didRename = null,

        /**
         * The server is interested in receiving willRenameFiles requests.
         */
        #[Shape(new Shape\Union(FileOperationRegistrationOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationRegistrationOptions $willRename = null,

        /**
         * The server is interested in receiving didDeleteFiles file notifications.
         */
        #[Shape(new Shape\Union(FileOperationRegistrationOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationRegistrationOptions $didDelete = null,

        /**
         * The server is interested in receiving willDeleteFiles file requests.
         */
        #[Shape(new Shape\Union(FileOperationRegistrationOptions::class, new Shape\Scalar('null')))]
        public ?FileOperationRegistrationOptions $willDelete = null
    ) {}
}
