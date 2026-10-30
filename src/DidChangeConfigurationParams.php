<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a change configuration notification.
 */
class DidChangeConfigurationParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The actual changed settings
         *
         * @var mixed
         */
        #[Shape(new Shape\Unknown())]
        public $settings
    ) {}
}
