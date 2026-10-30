<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $title,
        /**
         * The identifier of the actual command handler.
         */
        public string $command,
        /**
         * Arguments that the command handler should be
         * invoked with.
         *
         * @var array<mixed>|null
         */
        public ?array $arguments = null,
    ) {
    }
}