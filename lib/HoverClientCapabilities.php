<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class HoverClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether hover supports dynamic registration.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,

        /**
         * Client supports the following content formats for the content
         * property. The order describes the preferred format of the client.
         *
         * @var list<MarkupKind::*>|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Sequence(new Shape\Union(new Shape\Literal('plaintext'), new Shape\Literal('markdown'))),
                new Shape\Scalar('null'),
            ),
        )]
        public ?array $contentFormat = null
    ) {}
}
