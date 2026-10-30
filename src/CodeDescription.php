<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Structure to capture a description for an error code.
 */
class CodeDescription implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An URI to open with more information about the diagnostic error.
         */
        #[Shape(['scalar' => 'string'])]
        public string $href
    ) {}
}
