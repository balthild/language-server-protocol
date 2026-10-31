<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

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
        #[Shape(new Shape\Scalar('string'))]
        public string $firstTriggerCharacter,

        /**
         * More trigger characters.
         *
         * @var list<string>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('string')), new Shape\Scalar('null')))]
        public ?array $moreTriggerCharacter = null
    ) {}
}
