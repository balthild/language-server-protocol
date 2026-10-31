<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters sent in a save text document notification
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class DidSaveTextDocumentParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document that was saved.
         */
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * Optional the content when saved. Depends on the includeText value
         * when the save notification was requested.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $text = null
    ) {}
}
