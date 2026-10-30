<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents a parameter of a callable-signature. A parameter can
 * have a label and a doc-comment.
 */
class ParameterInformation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The label of this parameter information.
         *
         * Either a string or an inclusive start and exclusive end offsets within its containing
         * signature label. (see SignatureInformation.label). The offsets are based on a UTF-16
         * string representation as `Position` and `Range` does.
         *
         * *Note*: a label of type string should be a substring of its containing signature label.
         * Its intended use case is to highlight the parameter label part in the `SignatureInformation.label`.
         *
         * @var string|array{int, int}
         */
        public $label,
        /**
         * The human-readable doc-comment of this parameter. Will be shown
         * in the UI but can be omitted.
         *
         * @var string|MarkupContent|null
         */
        #[Deserialize(MarkupContent::class)]
        public $documentation = null
    ) {}
}
