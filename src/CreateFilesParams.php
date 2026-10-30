<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters sent in notifications/requests for user-initiated creation of
 * files.
 */
class CreateFilesParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An array of all files/folders created in this operation.
         *
         * @var list<FileCreate>
         */
        #[Shape(new Shape\Sequence(FileCreate::class))]
        public array $files
    ) {}
}
