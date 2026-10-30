<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The result returned from an initialize request.
 */
class InitializeResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The capabilities the language server provides.
         */
        #[Shape(ServerCapabilities::class)]
        public ServerCapabilities $capabilities,

        /**
         * Information about the server.
         *
         * @var array{name: string, version?: string}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $serverInfo = null
    ) {}
}
