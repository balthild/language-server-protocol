<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * The server capabilities of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class ExecuteCommandOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * The commands to be executed on the server
         *
         * @var array<string>
         */
        public array $commands,
        public ?bool $workDoneProgress = null,
    ) {
    }
}