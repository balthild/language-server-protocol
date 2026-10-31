<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * The position around which the on type formatting should happen.
         * This is not necessarily the exact position where the character denoted
         * by the property `ch` got typed.
         */
        #[Shape(Position::class)]
        public Position $position,

        /**
         * The character that has been typed that triggered the formatting
         * on type request. That is not necessarily the last character that
         * got inserted into the document since the client could auto insert
         * characters as well (e.g. like automatic brace completion).
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $ch,

        /**
         * The formatting options.
         */
        #[Shape(FormattingOptions::class)]
        public FormattingOptions $options
    ) {}
}
