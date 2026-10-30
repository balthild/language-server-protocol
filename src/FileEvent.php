<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        /**
         * The change type.
         *
         * @var FileChangeType::*
         */
        #[Shape(['union' => [['literal' => 1], ['literal' => 2], ['literal' => 3]]])]
        public $type
    ) {
        $this->uri = urldecode($uri);
    }
}
