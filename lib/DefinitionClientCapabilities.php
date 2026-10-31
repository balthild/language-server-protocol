<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client Capabilities for a [DefinitionRequest](#DefinitionRequest).
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class DefinitionClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether definition supports dynamic registration.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,

        /**
         * The client supports additional metadata in the form of definition links.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $linkSupport = null
    ) {}
}
