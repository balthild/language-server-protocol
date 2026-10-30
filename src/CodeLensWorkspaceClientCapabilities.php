<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class CodeLensWorkspaceClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether the client implementation supports a refresh request sent from the
         * server to the client.
         * 
         * Note that this event is global and will force the client to refresh all
         * code lenses currently shown. It should be used with absolute care and is
         * useful for situation where a server for example detect a project wide
         * change that requires such a calculation.
         */
        public ?bool $refreshSupport = null,
    ) {
    }
}