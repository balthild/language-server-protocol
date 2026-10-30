<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class SemanticTokensWorkspaceClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether the client implementation supports a refresh request sent from
         * the server to the client.
         *
         * Note that this event is global and will force the client to refresh all
         * semantic tokens currently shown. It should be used with absolute care
         * and is useful for situation where a server for example detects a project
         * wide change that requires such a calculation.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $refreshSupport = null
    ) {}
}
