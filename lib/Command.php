<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a reference to a command. Provides a title which
 * will be used to represent a command in the UI and, optionally,
 * an array of arguments which will be passed to the command handler
 * function when invoked.
 */
class Command implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Title of the command, like `save`.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $title,

        /**
         * The identifier of the actual command handler.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $command,

        /**
         * Arguments that the command handler should be
         * invoked with.
         *
         * @var list<mixed>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Unknown()), new Shape\Scalar('null')))]
        public ?array $arguments = null
    ) {}
}
