<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents a location inside a resource, such as a line
 * inside a text file.
 */
class Location implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        public string $uri,
        #[Deserialize(Range::class)]
        public Range $range,
    ) {
        $this->uri = urldecode($uri);
    }
}