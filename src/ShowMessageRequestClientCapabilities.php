<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Show message request client capabilities
 */
class ShowMessageRequestClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Capabilities specific to the `MessageActionItem` type.
         *
         * @var array{additionalPropertiesSupport?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $messageActionItem = null
    ) {}
}
