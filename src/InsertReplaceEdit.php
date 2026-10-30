<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A special text edit to provide an insert and a replace operation.
 */
class InsertReplaceEdit implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The string to be inserted.
         */
        #[Shape(['scalar' => 'string'])]
        public string $newText,
        /**
         * The range if the insert is requested
         */
        #[Shape(['class' => Range::class])]
        public Range $insert,
        /**
         * The range if the replace is requested.
         */
        #[Shape(['class' => Range::class])]
        public Range $replace
    ) {}
}
