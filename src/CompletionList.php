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
        #[Shape(['scalar' => 'bool'])]
        public bool $isIncomplete,
        /**
         * The completion items.
         *
         * @var list<CompletionItem>
         */
        #[Shape(['list' => ['class' => CompletionItem::class]])]
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
        #[Shape([
            'union' => [
                [
                    'shape' => [
                        'commitCharacters?' => ['list' => ['scalar' => 'string']],
                        'editRange?' => [
                            'union' => [
                                ['class' => Range::class],
                                [
                                    'shape' => [
                                        'insert' => ['class' => Range::class],
                                        'replace' => ['class' => Range::class],
                                    ],
                                ],
                            ],
                        ],
                        'insertTextFormat?' => ['union' => [['literal' => 1], ['literal' => 2]]],
                        'insertTextMode?' => ['union' => [['literal' => 1], ['literal' => 2]]],
                        'data?' => ['scalar' => 'mixed'],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public ?array $itemDefaults = null
    ) {}
}
