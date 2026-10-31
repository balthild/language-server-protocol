<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents the signature of something callable. A signature
 * can have a label, like a function-name, a doc-comment, and
 * a set of parameters.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class SignatureInformation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The label of this signature. Will be shown in
         * the UI.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $label,

        /**
         * The human-readable doc-comment of this signature. Will be shown
         * in the UI but can be omitted.
         *
         * @var string|MarkupContent|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('string'), MarkupContent::class),
                new Shape\Scalar('null'),
            ),
        )]
        public $documentation = null,

        /**
         * The parameters of this signature.
         *
         * @var list<ParameterInformation>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(ParameterInformation::class), new Shape\Scalar('null')))]
        public ?array $parameters = null,

        /**
         * The index of the active parameter.
         *
         * If provided, this is used in place of `SignatureHelp.activeParameter`.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public ?int $activeParameter = null
    ) {}
}
