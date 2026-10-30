<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * The parameters of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class ExecuteCommandParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The identifier of the actual command handler.
         */
        public string $command,
        /**
         * Arguments that the command should be invoked with.
         *
         * @var array<mixed>|null
         */
        public ?array $arguments = null,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null
    ) {}
}
