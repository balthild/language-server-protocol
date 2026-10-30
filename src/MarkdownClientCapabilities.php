<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $parser,
        /**
         * The version of the parser.
         */
        public ?string $version = null,
        /**
         * A list of HTML tags that the client allows / supports in
         * Markdown.
         *
         * @var array<string>|null
         */
        public ?array $allowedTags = null,
    ) {
    }
}