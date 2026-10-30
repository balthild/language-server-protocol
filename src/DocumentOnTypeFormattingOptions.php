<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['scalar' => 'string'])]
        public string $firstTriggerCharacter,
        /**
         * More trigger characters.
         *
         * @var list<string>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'string']], ['scalar' => 'null']]])]
        public ?array $moreTriggerCharacter = null
    ) {}
}
