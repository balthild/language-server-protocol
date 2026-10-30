<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class ColorPresentation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The label of this color presentation. It will be shown on the color
         * picker header. By default this is also the text that is inserted when selecting
         * this color presentation.
         */
        public string $label,
        /**
         * An [edit](#TextEdit) which is applied to a document when selecting
         * this presentation for the color.  When `falsy` the [label](#ColorPresentation.label)
         * is used.
         */
        #[Deserialize(TextEdit::class)]
        public ?TextEdit $textEdit = null,
        /**
         * An optional array of additional [text edits](#TextEdit) that are applied when
         * selecting this color presentation. Edits must not overlap with the main [edit](#ColorPresentation.textEdit) nor with themselves.
         *
         * @var list<TextEdit>|null
         */
        #[Deserialize(TextEdit::class, iterable: true)]
        public ?array $additionalTextEdits = null
    ) {}
}
