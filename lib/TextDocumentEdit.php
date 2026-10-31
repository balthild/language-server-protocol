<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Describes textual changes on a text document. A TextDocumentEdit describes all changes
 * on a document version Si and after they are applied move the document to version Si+1.
 * So the creator of a TextDocumentEdit doesn't need to sort the array of edits or do any
 * kind of ordering. However the edits must be non overlapping.
 */
class TextDocumentEdit implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document to change.
         */
        #[Shape(OptionalVersionedTextDocumentIdentifier::class)]
        public OptionalVersionedTextDocumentIdentifier $textDocument,

        /**
         * The edits to be applied.
         *
         * @var list<(TextEdit|AnnotatedTextEdit)>
         */
        #[Shape(new Shape\Sequence(new Shape\Union(TextEdit::class, AnnotatedTextEdit::class)))]
        public array $edits
    ) {}
}
