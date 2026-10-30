<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The publish diagnostic client capabilities.
 */
class PublishDiagnosticsClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether the clients accepts diagnostics with related information.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $relatedInformation = null,

        /**
         * Client supports the tag property to provide meta data about a diagnostic.
         * Clients supporting tags have to handle unknown tags gracefully.
         *
         * @var array{valueSet: list<DiagnosticTag::*>}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $tagSupport = null,

        /**
         * Whether the client interprets the version property of the
         * `textDocument/publishDiagnostics` notification's parameter.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $versionSupport = null,

        /**
         * Client supports a codeDescription property
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $codeDescriptionSupport = null,

        /**
         * Whether code action supports the `data` property which is
         * preserved between a `textDocument/publishDiagnostics` and
         * `textDocument/codeAction` request.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $dataSupport = null
    ) {}
}
