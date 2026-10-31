<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The publish diagnostic notification's parameters.
 */
class PublishDiagnosticsParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The URI for which diagnostic information is reported.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * An array of diagnostic information items.
         *
         * @var list<Diagnostic>
         */
        #[Shape(new Shape\Sequence(Diagnostic::class))]
        public array $diagnostics,

        /**
         * Optional the version number of the document the diagnostics are published for.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public ?int $version = null
    ) {
        $this->uri = \urldecode($uri);
    }
}
