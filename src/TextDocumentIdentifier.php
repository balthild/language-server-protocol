<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A literal to identify a text document in the client.
 */
class TextDocumentIdentifier implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document's uri.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri
    ) {
        $this->uri = \urldecode($uri);
    }
}
