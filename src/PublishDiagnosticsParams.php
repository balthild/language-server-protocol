<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        /**
         * An array of diagnostic information items.
         *
         * @var list<Diagnostic>
         */
        #[Shape(['list' => ['class' => Diagnostic::class]])]
        public array $diagnostics,
        /**
         * Optional the version number of the document the diagnostics are published for.
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $version = null
    ) {
        $this->uri = urldecode($uri);
    }
}
