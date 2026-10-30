<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The parameters of a [DocumentOnTypeFormattingRequest](#DocumentOnTypeFormattingRequest).
 */
class DocumentOnTypeFormattingParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document to format.
         */
        #[Deserialize(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,
        /**
         * The position around which the on type formatting should happen.
         * This is not necessarily the exact position where the character denoted
         * by the property `ch` got typed.
         */
        #[Deserialize(Position::class)]
        public Position $position,
        /**
         * The character that has been typed that triggered the formatting
         * on type request. That is not necessarily the last character that
         * got inserted into the document since the client could auto insert
         * characters as well (e.g. like automatic brace completion).
         */
        public string $ch,
        /**
         * The formatting options.
         */
        #[Deserialize(FormattingOptions::class)]
        public FormattingOptions $options
    ) {}
}
