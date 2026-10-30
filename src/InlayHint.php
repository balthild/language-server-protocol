<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class InlayHint implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The position of this hint.
         */
        #[Deserialize(Position::class)]
        public Position $position,
        /**
         * The label of this hint. A human readable string or an array of
         * InlayHintLabelPart label parts.
         *
         * *Note* that neither the string nor the label part can be empty.
         *
         * @var string|array<array{value:string,tooltip:string|MarkupContent,location:Location,command:Command}>
         */
        public $label,
        /**
         * The kind of this hint. Can be omitted in which case the client
         * should fall back to a reasonable default.
         *
         * @var InlayHintKind::*|null
         */
        public $kind = null,
        /**
         * Optional text edits that are performed when accepting this inlay hint.
         *
         * *Note* that edits are expected to change the document so that the inlay
         * hint (or its nearest variant) is now part of the document and the inlay
         * hint itself is now obsolete.
         *
         * @var array<TextEdit>|null
         */
        #[Deserialize(TextEdit::class, iterable: true)]
        public ?array $textEdits = null,
        /**
         * The tooltip text when you hover over this item.
         *
         * @var string|MarkupContent|null
         */
        #[Deserialize(MarkupContent::class)]
        public $tooltip = null,
        /**
         * Render padding before the hint.
         *
         * Note: Padding should use the editor's background color, not the
         * background color of the hint itself. That means padding can be used
         * to visually align/separate an inlay hint.
         */
        public ?bool $paddingLeft = null,
        /**
         * Render padding after the hint.
         *
         * Note: Padding should use the editor's background color, not the
         * background color of the hint itself. That means padding can be used
         * to visually align/separate an inlay hint.
         */
        public ?bool $paddingRight = null,
        /**
         * A data entry field that is preserved on an inlay hint between
         * a `textDocument/inlayHint` and a `inlayHint/resolve` request.
         *
         * @var mixed|null
         */
        public $data = null
    ) {}
}
