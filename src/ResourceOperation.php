<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * A generic resource operation.
 */
class ResourceOperation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The resource operation kind.
         */
        public string $kind,
        /**
         * An optional annotation identifier describing the operation.
         */
        public ?string $annotationId = null,
    ) {
    }
}