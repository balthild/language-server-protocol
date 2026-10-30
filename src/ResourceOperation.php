<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['scalar' => 'string'])]
        public string $kind,
        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $annotationId = null
    ) {}
}
