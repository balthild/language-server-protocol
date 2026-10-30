<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Additional details for a completion item label.
 */
class CompletionItemLabelDetails implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An optional string which is rendered less prominently directly after {@link CompletionItem.label label},
         * without any spacing. Should be used for function signatures and type annotations.
         */
        public ?string $detail = null,
        /**
         * An optional string which is rendered less prominently after {@link CompletionItem.detail}. Should be used
         * for fully qualified names and file paths.
         */
        public ?string $description = null
    ) {}
}
