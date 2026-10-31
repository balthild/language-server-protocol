<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a notification message.
 */
class ShowMessageParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The message type. See {@link MessageType}
         *
         * @var MessageType::*
         */
        #[Shape(
            new Shape\Union(new Shape\Literal(1), new Shape\Literal(2), new Shape\Literal(3), new Shape\Literal(4)),
        )]
        public $type,

        /**
         * The actual message.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $message
    ) {}
}
