<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): _InitializeParams, WorkspaceFoldersInitializeParams
 */
class InitializeParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The capabilities provided by the client (editor or tool)
         */
        #[Shape(ClientCapabilities::class)]
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
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public $processId = null,

        /**
         * Information about the client
         *
         * @var array{name: string, version?: string}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $clientInfo = null,

        /**
         * The locale the client is currently showing the user interface
         * in. This must not necessarily be the locale of the operating
         * system.
         *
         * Uses IETF language tags as the value's syntax
         * (See https://en.wikipedia.org/wiki/IETF_language_tag)
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $locale = null,

        /**
         * The rootPath of the workspace. Is null
         * if no folder is open.
         *
         * @var string|null
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public $rootPath = null,

        /**
         * The rootUri of the workspace. Is null if no
         * folder is open. If both `rootPath` and `rootUri` are set
         * `rootUri` wins.
         *
         * @var string|null
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public $rootUri = null,

        /**
         * User provided initialization options.
         *
         * @var mixed|null
         */
        #[Shape(new Shape\Union(new Shape\Unknown(), new Shape\Scalar('null')))]
        public $initializationOptions = null,

        /**
         * The initial trace setting. If omitted trace is disabled ('off').
         *
         * @var 'off'|'messages'|'compact'|'verbose'|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Literal('off'),
                    new Shape\Literal('messages'),
                    new Shape\Literal('compact'),
                    new Shape\Literal('verbose'),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $trace = null,

        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $workDoneToken = null,

        /**
         * The workspace folders configured in the client when the server starts.
         *
         * This property is only available if the client supports workspace folders.
         * It can be `null` if the client supports workspace folders but none are
         * configured.
         *
         * @var list<WorkspaceFolder>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(WorkspaceFolder::class), new Shape\Scalar('null')))]
        public $workspaceFolders = null
    ) {}
}
