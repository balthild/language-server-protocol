<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Static registration options to be returned in the initialize
 * request.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class StaticRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $id = null
    ) {}
}
