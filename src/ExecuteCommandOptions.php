<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
         * @var list<string>
         */
        #[Shape(['list' => ['scalar' => 'string']])]
        public array $commands,
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
