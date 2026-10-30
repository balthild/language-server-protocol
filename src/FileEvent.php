<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $uri,
        /**
         * The change type.
         *
         * @var FileChangeType::*
         */
        public $type,
    ) {
        $this->uri = urldecode($uri);
    }
}