<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client capabilities specific to regular expressions.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class RegularExpressionsClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The engine's name.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $engine,

        /**
         * The engine's version.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $version = null
    ) {}
}
