<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class DidChangeWatchedFilesClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Did change watched files notification supports dynamic registration. Please note
         * that the current protocol doesn't support static configuration for file changes
         * from the server side.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,

        /**
         * Whether the client has support for {@link RelativePattern relative pattern}
         * or not.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $relativePatternSupport = null
    ) {}
}
