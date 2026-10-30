<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * The initialize parameters
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class _InitializeParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The capabilities provided by the client (editor or tool)
         */
        #[Deserialize(ClientCapabilities::class)]
        public ClientCapabilities $capabilities,
        /**
         * The process Id of the parent process that started
         * the server.
         *
         * Is `null` if the process has not been started by another process.
         * If the parent process is not alive then the server should exit.
         *
         * @var int|null
         */
        public $processId = null,
        /**
         * Information about the client
         *
         * @var array{name:string,version:string}|null
         */
        public ?array $clientInfo = null,
        /**
         * The locale the client is currently showing the user interface
         * in. This must not necessarily be the locale of the operating
         * system.
         *
         * Uses IETF language tags as the value's syntax
         * (See https://en.wikipedia.org/wiki/IETF_language_tag)
         */
        public ?string $locale = null,
        /**
         * The rootPath of the workspace. Is null
         * if no folder is open.
         *
         * @var string|null
         */
        public $rootPath = null,
        /**
         * The rootUri of the workspace. Is null if no
         * folder is open. If both `rootPath` and `rootUri` are set
         * `rootUri` wins.
         *
         * @var string|null
         */
        public $rootUri = null,
        /**
         * User provided initialization options.
         *
         * @var mixed|null
         */
        public $initializationOptions = null,
        /**
         * The initial trace setting. If omitted trace is disabled ('off').
         *
         * @var 'off'|'messages'|'compact'|'verbose'|null
         */
        public $trace = null,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null
    ) {}
}
