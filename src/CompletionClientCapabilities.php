<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports the following `CompletionItem` specific
         * capabilities.
         *
         * @var array{snippetSupport?: bool, commitCharactersSupport?: bool, documentationFormat?: list<MarkupKind::*>, deprecatedSupport?: bool, preselectSupport?: bool, tagSupport?: array{valueSet: list<CompletionItemTag::*>}, insertReplaceSupport?: bool, resolveSupport?: array{properties: list<string>}, insertTextModeSupport?: array{valueSet: list<InsertTextMode::*>}, labelDetailsSupport?: bool}|null
         */
        public ?array $completionItem = null,
        /**
         * @var array{valueSet?: list<CompletionItemKind::*>}|null
         */
        public ?array $completionItemKind = null,
        /**
         * Defines how the client handles whitespace and indentation
         * when accepting a completion item that uses multi line
         * text in either `insertText` or `textEdit`.
         *
         * @var InsertTextMode::*|null
         */
        public $insertTextMode = null,
        /**
         * The client supports to send additional context information for a
         * `textDocument/completion` request.
         */
        public ?bool $contextSupport = null,
        /**
         * The client supports the following `CompletionList` specific
         * capabilities.
         *
         * @var array{itemDefaults?: list<string>}|null
         */
        public ?array $completionList = null
    ) {}
}
