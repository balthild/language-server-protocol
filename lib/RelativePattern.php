<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A relative pattern is a helper to construct glob patterns that are matched
 * relatively to a base URI. The common value for a `baseUri` is a workspace
 * folder root, but it can be another absolute URI as well.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class RelativePattern implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A workspace folder or a base URI to which this pattern will be matched
         * against relatively.
         *
         * @var WorkspaceFolder|string
         */
        #[Shape(new Shape\Union(WorkspaceFolder::class, new Shape\Scalar('string')))]
        public $baseUri,

        /**
         * The actual glob pattern;
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $pattern
    ) {}
}
