<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Completion client capabilities
 */
class CompletionClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether completion supports dynamic registration.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports the following `CompletionItem` specific
         * capabilities.
         *
         * @var array{snippetSupport?: bool, commitCharactersSupport?: bool, documentationFormat?: list<MarkupKind::*>, deprecatedSupport?: bool, preselectSupport?: bool, tagSupport?: array{valueSet: list<CompletionItemTag::*>}, insertReplaceSupport?: bool, resolveSupport?: array{properties: list<string>}, insertTextModeSupport?: array{valueSet: list<InsertTextMode::*>}, labelDetailsSupport?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $completionItem = null,
        /**
         * @var array{valueSet?: list<CompletionItemKind::*>}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $completionItemKind = null,
        /**
         * Defines how the client handles whitespace and indentation
         * when accepting a completion item that uses multi line
         * text in either `insertText` or `textEdit`.
         *
         * @var InsertTextMode::*|null
         */
        #[Shape(['union' => [['union' => [['literal' => 1], ['literal' => 2]]], ['scalar' => 'null']]])]
        public $insertTextMode = null,
        /**
         * The client supports to send additional context information for a
         * `textDocument/completion` request.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $contextSupport = null,
        /**
         * The client supports the following `CompletionList` specific
         * capabilities.
         *
         * @var array{itemDefaults?: list<string>}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $completionList = null
    ) {}
}
