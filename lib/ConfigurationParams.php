<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a configuration request.
 */
class ConfigurationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var list<ConfigurationItem>
         */
        #[Shape(new Shape\Sequence(ConfigurationItem::class))]
        public array $items
    ) {}
}
