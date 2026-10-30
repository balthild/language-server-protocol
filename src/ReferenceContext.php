<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Value-object that contains additional information when
 * requesting references.
 */
class ReferenceContext implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Include the declaration of the current symbol.
         */
        public bool $includeDeclaration
    ) {}
}
