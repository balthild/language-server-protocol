<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The result of a showDocument request.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.showDocument.d.ts
 */
class ShowDocumentResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A boolean indicating if the show was successful.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $success
    ) {}
}
