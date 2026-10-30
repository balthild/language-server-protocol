<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['scalar' => 'string'])]
        public string $label,
        /**
         * The human-readable doc-comment of this signature. Will be shown
         * in the UI but can be omitted.
         *
         * @var string|MarkupContent|null
         */
        #[Shape([
            'union' => [['union' => [['scalar' => 'string'], ['class' => MarkupContent::class]]], ['scalar' => 'null']],
        ])]
        public $documentation = null,
        /**
         * The parameters of this signature.
         *
         * @var list<ParameterInformation>|null
         */
        #[Shape(['union' => [['list' => ['class' => ParameterInformation::class]], ['scalar' => 'null']]])]
        public ?array $parameters = null,
        /**
         * The index of the active parameter.
         *
         * If provided, this is used in place of `SignatureHelp.activeParameter`.
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $activeParameter = null
    ) {}
}
