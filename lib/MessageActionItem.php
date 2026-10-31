<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class MessageActionItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A short title like 'Retry', 'Open Log' etc.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $title
    ) {}
}
