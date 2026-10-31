<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client capabilities of a [DocumentRangeFormattingRequest](#DocumentRangeFormattingRequest).
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class DocumentRangeFormattingClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether range formatting supports dynamic registration.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null
    ) {}
}
