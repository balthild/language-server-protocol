<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A special text edit with an additional change annotation.
 *
 * Mixins (implemented TS interfaces): TextEdit
 */
class AnnotatedTextEdit extends TextEdit
{
    public function __construct(
        /**
         * The actual identifier of the change annotation
         */
        #[Shape(['scalar' => 'string'])]
        public string $annotationId,
        /**
         * The range of the text document to be manipulated. To insert
         * text into a document create a range where start === end.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The string to be inserted. For delete operations use an
         * empty string.
         */
        #[Shape(['scalar' => 'string'])]
        public string $newText
    ) {}
}
