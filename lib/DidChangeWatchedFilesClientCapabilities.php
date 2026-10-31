<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
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
