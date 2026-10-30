<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client capabilities specific to the used markdown parser.
 */
class MarkdownClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The name of the parser.
         */
        #[Shape(['scalar' => 'string'])]
        public string $parser,
        /**
         * The version of the parser.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $version = null,
        /**
         * A list of HTML tags that the client allows / supports in
         * Markdown.
         *
         * @var list<string>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'string']], ['scalar' => 'null']]])]
        public ?array $allowedTags = null
    ) {}
}
