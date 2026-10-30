<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * General parameters to unregister a request or notification.
 */
class Unregistration implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The id used to unregister the request or notification. Usually an id
         * provided during the register request.
         */
        public string $id,
        /**
         * The method to unregister for.
         */
        public string $method
    ) {}
}
