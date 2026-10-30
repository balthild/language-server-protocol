<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters of a configuration request.
 */
class ConfigurationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var array<ConfigurationItem>
         */
        #[Deserialize(ConfigurationItem::class, iterable: true)]
        public array $items
    ) {}
}
