<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A workspace folder inside a client.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class WorkspaceFolder implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The associated URI for this workspace folder.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * The name of the workspace folder. Used to refer to this
         * workspace folder in the user interface.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $name
    ) {}
}
