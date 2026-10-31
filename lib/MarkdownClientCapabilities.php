<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Client capabilities specific to the used markdown parser.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class MarkdownClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The name of the parser.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $parser,

        /**
         * The version of the parser.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $version = null,

        /**
         * A list of HTML tags that the client allows / supports in
         * Markdown.
         *
         * @var list<string>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('string')), new Shape\Scalar('null')))]
        public ?array $allowedTags = null
    ) {}
}
