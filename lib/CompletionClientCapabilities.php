<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Completion client capabilities
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class CompletionClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether completion supports dynamic registration.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dynamicRegistration = null,

        /**
         * The client supports the following `CompletionItem` specific
         * capabilities.
         *
         * @var array{snippetSupport?: bool, commitCharactersSupport?: bool, documentationFormat?: list<MarkupKind::*>, deprecatedSupport?: bool, preselectSupport?: bool, tagSupport?: array{valueSet: list<CompletionItemTag::*>}, insertReplaceSupport?: bool, resolveSupport?: array{properties: list<string>}, insertTextModeSupport?: array{valueSet: list<InsertTextMode::*>}, labelDetailsSupport?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $completionItem = null,

        /**
         * @var array{valueSet?: list<CompletionItemKind::*>}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $completionItemKind = null,

        /**
         * Defines how the client handles whitespace and indentation
         * when accepting a completion item that uses multi line
         * text in either `insertText` or `textEdit`.
         *
         * @var InsertTextMode::*|null
         */
        #[Shape(new Shape\Union(new Shape\Union(new Shape\Literal(1), new Shape\Literal(2)), new Shape\Scalar('null')))]
        public $insertTextMode = null,

        /**
         * The client supports to send additional context information for a
         * `textDocument/completion` request.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $contextSupport = null,

        /**
         * The client supports the following `CompletionList` specific
         * capabilities.
         *
         * @var array{itemDefaults?: list<string>}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $completionList = null
    ) {}
}
