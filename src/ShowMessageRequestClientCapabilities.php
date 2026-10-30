<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
         * @var array{additionalPropertiesSupport: bool}|null
         */
        public ?array $messageActionItem = null
    ) {}
}
