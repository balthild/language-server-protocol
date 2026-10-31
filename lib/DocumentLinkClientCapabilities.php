<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The client capabilities of a [DocumentLinkRequest](#DocumentLinkRequest).
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class DocumentLinkClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether document link supports dynamic registration.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,

        /**
         * Whether the client supports the `tooltip` property on `DocumentLink`.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $tooltipSupport = null
    ) {}
}
