<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Signature help represents the signature of something
 * callable. There can be multiple signature but only one
 * active and only one active parameter.
 */
class SignatureHelp implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * One or more signatures.
         *
         * @var list<SignatureInformation>
         */
        #[Shape(new Shape\Sequence(SignatureInformation::class))]
        public array $signatures,
        /**
         * The active signature. If omitted or the value lies outside the
         * range of `signatures` the value defaults to zero or is ignored if
         * the `SignatureHelp` has no signatures.
         *
         * Whenever possible implementors should make an active decision about
         * the active signature and shouldn't rely on a default value.
         *
         * In future version of the protocol this property might become
         * mandatory to better express this.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public ?int $activeSignature = null,
        /**
         * The active parameter of the active signature. If omitted or the value
         * lies outside the range of `signatures[activeSignature].parameters`
         * defaults to 0 if the active signature has parameters. If
         * the active signature has no parameters it is ignored.
         * In future version of the protocol this property might become
         * mandatory to better express the active parameter if the
         * active signature does have any.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public ?int $activeParameter = null
    ) {}
}
