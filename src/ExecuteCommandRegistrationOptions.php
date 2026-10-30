<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Registration options for a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): ExecuteCommandOptions
 */
class ExecuteCommandRegistrationOptions extends ExecuteCommandOptions
{
    public function __construct(
        /**
         * The commands to be executed on the server
         *
         * @var array<string>
         */
        public array $commands,
        public ?bool $workDoneProgress = null
    ) {}
}
