<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * An event describing a file change.
 */
class FileEvent implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The file's uri.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * The change type.
         *
         * @var FileChangeType::*
         */
        #[Shape(new Shape\Union(new Shape\Literal(1), new Shape\Literal(2), new Shape\Literal(3)))]
        public $type
    ) {
        $this->uri = urldecode($uri);
    }
}
