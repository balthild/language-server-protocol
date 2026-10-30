<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters sent in notifications/requests for user-initiated deletes of
 * files.
 */
class DeleteFilesParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An array of all files/folders deleted in this operation.
         *
         * @var array<FileDelete>
         */
        #[Deserialize(FileDelete::class, iterable: true)]
        public array $files
    ) {}
}
