<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A generic resource operation.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class ResourceOperation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The resource operation kind.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $kind,

        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $annotationId = null
    ) {}
}
