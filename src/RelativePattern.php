<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * A relative pattern is a helper to construct glob patterns that are matched
 * relatively to a base URI. The common value for a `baseUri` is a workspace
 * folder root, but it can be another absolute URI as well.
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
        #[Deserialize(WorkspaceFolder::class)]
        public $baseUri,
        /**
         * The actual glob pattern;
         */
        public string $pattern,
    ) {
    }
}