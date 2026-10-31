<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents a diagnostic, such as a compiler error or warning. Diagnostic objects
 * are only valid in the scope of a resource.
 */
class Diagnostic implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range at which the message applies
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * The diagnostic's message. It usually appears in the user interface
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $message,

        /**
         * The diagnostic's severity. Can be omitted. If omitted it is up to the
         * client to interpret diagnostics as error, warning, info or hint.
         *
         * @var DiagnosticSeverity::*|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Literal(1), new Shape\Literal(2), new Shape\Literal(3), new Shape\Literal(4)),
                new Shape\Scalar('null'),
            ),
        )]
        public $severity = null,

        /**
         * The diagnostic's code, which usually appear in the user interface.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $code = null,

        /**
         * An optional property to describe the error code.
         * Requires the code field (above) to be present/not null.
         */
        #[Shape(new Shape\Union(CodeDescription::class, new Shape\Scalar('null')))]
        public ?CodeDescription $codeDescription = null,

        /**
         * A human-readable string describing the source of this
         * diagnostic, e.g. 'typescript' or 'super lint'. It usually
         * appears in the user interface.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $source = null,

        /**
         * Additional metadata about the diagnostic.
         *
         * @var list<DiagnosticTag::*>|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Sequence(new Shape\Union(new Shape\Literal(1), new Shape\Literal(2))),
                new Shape\Scalar('null'),
            ),
        )]
        public ?array $tags = null,

        /**
         * An array of related diagnostic information, e.g. when symbol-names within
         * a scope collide all definitions can be marked via this property.
         *
         * @var list<DiagnosticRelatedInformation>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(DiagnosticRelatedInformation::class), new Shape\Scalar('null')))]
        public ?array $relatedInformation = null,

        /**
         * A data entry field that is preserved between a `textDocument/publishDiagnostics`
         * notification and `textDocument/codeAction` request.
         *
         * @var mixed|null
         */
        #[Shape(new Shape\Union(new Shape\Unknown(), new Shape\Scalar('null')))]
        public $data = null
    ) {}
}
