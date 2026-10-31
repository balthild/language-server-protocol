<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Value-object that contains additional information when
 * requesting references.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class ReferenceContext implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Include the declaration of the current symbol.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $includeDeclaration
    ) {}
}
