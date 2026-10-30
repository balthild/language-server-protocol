<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['class' => ClientCapabilities::class])]
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
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['literal' => null]]], ['scalar' => 'null']]])]
        public $processId = null,
        /**
         * Information about the client
         *
         * @var array{name: string, version?: string}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $clientInfo = null,
        /**
         * The locale the client is currently showing the user interface
         * in. This must not necessarily be the locale of the operating
         * system.
         *
         * Uses IETF language tags as the value's syntax
         * (See https://en.wikipedia.org/wiki/IETF_language_tag)
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $locale = null,
        /**
         * The rootPath of the workspace. Is null
         * if no folder is open.
         *
         * @var string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'string'], ['literal' => null]]], ['scalar' => 'null']]])]
        public $rootPath = null,
        /**
         * The rootUri of the workspace. Is null if no
         * folder is open. If both `rootPath` and `rootUri` are set
         * `rootUri` wins.
         *
         * @var string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'string'], ['literal' => null]]], ['scalar' => 'null']]])]
        public $rootUri = null,
        /**
         * User provided initialization options.
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $initializationOptions = null,
        /**
         * The initial trace setting. If omitted trace is disabled ('off').
         *
         * @var 'off'|'messages'|'compact'|'verbose'|null
         */
        #[Shape([
            'union' => [
                [
                    'union' => [
                        ['literal' => 'off'],
                        ['literal' => 'messages'],
                        ['literal' => 'compact'],
                        ['literal' => 'verbose'],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public $trace = null,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null
    ) {}
}
