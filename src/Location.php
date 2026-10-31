<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

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
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        #[Shape(Range::class)]
        public Range $range
    ) {
        $this->uri = urldecode($uri);
    }
}
