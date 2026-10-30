<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A completion item represents a text snippet that is
 * proposed to complete text that is being typed.
 */
class CompletionItem implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The label of this completion item.
         *
         * The label property is also by default the text that
         * is inserted when selecting this completion.
         *
         * If label details are provided the label itself should
         * be an unqualified name of the completion item.
         */
        #[Shape(['scalar' => 'string'])]
        public string $label,
        /**
         * Additional details for the label
         */
        #[Shape(['union' => [['class' => CompletionItemLabelDetails::class], ['scalar' => 'null']]])]
        public ?CompletionItemLabelDetails $labelDetails = null,
        /**
         * The kind of this completion item. Based of the kind
         * an icon is chosen by the editor.
         *
         * @var CompletionItemKind::*|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['literal' => 1],
                        ['literal' => 2],
                        ['literal' => 3],
                        ['literal' => 4],
                        ['literal' => 5],
                        ['literal' => 6],
                        ['literal' => 7],
                        ['literal' => 8],
                        ['literal' => 9],
                        ['literal' => 10],
                        ['literal' => 11],
                        ['literal' => 12],
                        ['literal' => 13],
                        ['literal' => 14],
                        ['literal' => 15],
                        ['literal' => 16],
                        ['literal' => 17],
                        ['literal' => 18],
                        ['literal' => 19],
                        ['literal' => 20],
                        ['literal' => 21],
                        ['literal' => 22],
                        ['literal' => 23],
                        ['literal' => 24],
                        ['literal' => 25],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $kind = null,
        /**
         * Tags for this completion item.
         *
         * @var list<CompletionItemTag::*>|null
         */
        #[Shape(['union' => [['list' => ['literal' => 1]], ['scalar' => 'null']]])]
        public ?array $tags = null,
        /**
         * A human-readable string with additional information
         * about this item, like type or symbol information.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $detail = null,
        /**
         * A human-readable string that represents a doc-comment.
         *
         * @var string|MarkupContent|null
         */
        #[Shape([
            'union' => [['union' => [['scalar' => 'string'], ['class' => MarkupContent::class]]], ['scalar' => 'null']],
        ])]
        public $documentation = null,
        /**
         * Indicates if this item is deprecated.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $deprecated = null,
        /**
         * Select this item when showing.
         *
         * *Note* that only one completion item can be selected and that the
         * tool / client decides which item that is. The rule is that the *first*
         * item of those that match best is selected.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $preselect = null,
        /**
         * A string that should be used when comparing this item
         * with other items. When `falsy` the [label](#CompletionItem.label)
         * is used.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $sortText = null,
        /**
         * A string that should be used when filtering a set of
         * completion items. When `falsy` the [label](#CompletionItem.label)
         * is used.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $filterText = null,
        /**
         * A string that should be inserted into a document when selecting
         * this completion. When `falsy` the [label](#CompletionItem.label)
         * is used.
         *
         * The `insertText` is subject to interpretation by the client side.
         * Some tools might not take the string literally. For example
         * VS Code when code complete is requested in this example
         * `con<cursor position>` and a completion item with an `insertText` of
         * `console` is provided it will only insert `sole`. Therefore it is
         * recommended to use `textEdit` instead since it avoids additional client
         * side interpretation.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $insertText = null,
        /**
         * The format of the insert text. The format applies to both the
         * `insertText` property and the `newText` property of a provided
         * `textEdit`. If omitted defaults to `InsertTextFormat.PlainText`.
         *
         * Please note that the insertTextFormat doesn't apply to
         * `additionalTextEdits`.
         *
         * @var InsertTextFormat::*|null
         */
        #[Shape(['union' => [['union' => [['literal' => 1], ['literal' => 2]]], ['scalar' => 'null']]])]
        public $insertTextFormat = null,
        /**
         * How whitespace and indentation is handled during completion
         * item insertion. If not provided the clients default value depends on
         * the `textDocument.completion.insertTextMode` client capability.
         *
         * @var InsertTextMode::*|null
         */
        #[Shape(['union' => [['union' => [['literal' => 1], ['literal' => 2]]], ['scalar' => 'null']]])]
        public $insertTextMode = null,
        /**
         * An [edit](#TextEdit) which is applied to a document when selecting
         * this completion. When an edit is provided the value of
         * [insertText](#CompletionItem.insertText) is ignored.
         *
         * Most editors support two different operations when accepting a completion
         * item. One is to insert a completion text and the other is to replace an
         * existing text with a completion text. Since this can usually not be
         * predetermined by a server it can report both ranges. Clients need to
         * signal support for `InsertReplaceEdits` via the
         * `textDocument.completion.insertReplaceSupport` client capability
         * property.
         *
         * *Note 1:* The text edit's range as well as both ranges from an insert
         * replace edit must be a [single line] and they must contain the position
         * at which completion has been requested.
         * *Note 2:* If an `InsertReplaceEdit` is returned the edit's insert range
         * must be a prefix of the edit's replace range, that means it must be
         * contained and starting at the same position.
         *
         * @var TextEdit|InsertReplaceEdit|null
         */
        #[Shape([
            'union' => [
                ['union' => [['class' => TextEdit::class], ['class' => InsertReplaceEdit::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public $textEdit = null,
        /**
         * The edit text used if the completion item is part of a CompletionList and
         * CompletionList defines an item default for the text edit range.
         *
         * Clients will only honor this property if they opt into completion list
         * item defaults using the capability `completionList.itemDefaults`.
         *
         * If not provided and a list's default range is provided the label
         * property is used as a text.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $textEditText = null,
        /**
         * An optional array of additional [text edits](#TextEdit) that are applied when
         * selecting this completion. Edits must not overlap (including the same insert position)
         * with the main [edit](#CompletionItem.textEdit) nor with themselves.
         *
         * Additional text edits should be used to change text unrelated to the current cursor position
         * (for example adding an import statement at the top of the file if the completion item will
         * insert an unqualified type).
         *
         * @var list<TextEdit>|null
         */
        #[Shape(['union' => [['list' => ['class' => TextEdit::class]], ['scalar' => 'null']]])]
        public ?array $additionalTextEdits = null,
        /**
         * An optional set of characters that when pressed while this completion is active will accept it first and
         * then type that character. *Note* that all commit characters should have `length=1` and that superfluous
         * characters will be ignored.
         *
         * @var list<string>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'string']], ['scalar' => 'null']]])]
        public ?array $commitCharacters = null,
        /**
         * An optional [command](#Command) that is executed *after* inserting this completion. *Note* that
         * additional modifications to the current document should be described with the
         * [additionalTextEdits](#CompletionItem.additionalTextEdits)-property.
         */
        #[Shape(['union' => [['class' => Command::class], ['scalar' => 'null']]])]
        public ?Command $command = null,
        /**
         * A data entry field that is preserved on a completion item between a
         * [CompletionRequest](#CompletionRequest) and a [CompletionResolveRequest](#CompletionResolveRequest).
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $data = null
    ) {}
}
