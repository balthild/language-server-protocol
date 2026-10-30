<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents the signature of something callable. A signature
 * can have a label, like a function-name, a doc-comment, and
 * a set of parameters.
 */
class SignatureInformation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The label of this signature. Will be shown in
         * the UI.
         */
        public string $label,
        /**
         * The human-readable doc-comment of this signature. Will be shown
         * in the UI but can be omitted.
         *
         * @var string|MarkupContent|null
         */
        #[Deserialize(MarkupContent::class)]
        public $documentation = null,
        /**
         * The parameters of this signature.
         *
         * @var array<ParameterInformation>|null
         */
        #[Deserialize(ParameterInformation::class, iterable: true)]
        public ?array $parameters = null,
        /**
         * The index of the active parameter.
         * 
         * If provided, this is used in place of `SignatureHelp.activeParameter`.
         */
        public ?int $activeParameter = null,
    ) {
    }
}