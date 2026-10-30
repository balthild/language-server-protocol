<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a collection of [completion items](#CompletionItem) to be presented
 * in the editor.
 */
class CompletionList implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * This list it not complete. Further typing results in recomputing this list.
         *
         * Recomputed lists have all their items replaced (not appended) in the
         * incomplete completion sessions.
         */
        #[Shape(new Shape\Scalar('bool'))]
        public bool $isIncomplete,

        /**
         * The completion items.
         *
         * @var list<CompletionItem>
         */
        #[Shape(new Shape\Sequence(CompletionItem::class))]
        public array $items,

        /**
         * In many cases the items of an actual completion result share the same
         * value for properties like `commitCharacters` or the range of a text
         * edit. A completion list can therefore define item defaults which will
         * be used if a completion item itself doesn't specify the value.
         *
         * If a completion list specifies a default value and a completion item
         * also specifies a corresponding value the one from the item is used.
         *
         * Servers are only allowed to return default values if the client
         * signals support for this via the `completionList.itemDefaults`
         * capability.
         *
         * @var array{commitCharacters?: list<string>, editRange?: Range|array{insert: Range, replace: Range}, insertTextFormat?: InsertTextFormat::*, insertTextMode?: InsertTextMode::*, data?: mixed}|null
         */
        #[Shape(new Shape\Union(new Shape\Struct([
            'commitCharacters?' => new Shape\Sequence(new Shape\Scalar('string')),
            'editRange?' => new Shape\Union(Range::class, new Shape\Struct([
                'insert' => Range::class,
                'replace' => Range::class,
            ])),
            'insertTextFormat?' => new Shape\Union(new Shape\Literal(1), new Shape\Literal(2)),
            'insertTextMode?' => new Shape\Union(new Shape\Literal(1), new Shape\Literal(2)),
            'data?' => new Shape\Unknown(),
        ]), new Shape\Scalar('null')))]
        public ?array $itemDefaults = null
    ) {}
}
