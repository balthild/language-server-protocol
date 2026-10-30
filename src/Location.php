<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a location inside a resource, such as a line
 * inside a text file.
 */
class Location implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        #[Shape(['class' => Range::class])]
        public Range $range
    ) {
        $this->uri = urldecode($uri);
    }
}
