<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $uri,
        /**
         * An array of diagnostic information items.
         *
         * @var list<Diagnostic>
         */
        #[Deserialize(Diagnostic::class, iterable: true)]
        public array $diagnostics,
        /**
         * Optional the version number of the document the diagnostics are published for.
         */
        public ?int $version = null
    ) {
        $this->uri = urldecode($uri);
    }
}
