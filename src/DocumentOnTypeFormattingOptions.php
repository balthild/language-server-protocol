<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Provider options for a [DocumentOnTypeFormattingRequest](#DocumentOnTypeFormattingRequest).
 */
class DocumentOnTypeFormattingOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A character on which formatting should be triggered, like `{`.
         */
        public string $firstTriggerCharacter,
        /**
         * More trigger characters.
         *
         * @var list<string>|null
         */
        public ?array $moreTriggerCharacter = null
    ) {}
}
