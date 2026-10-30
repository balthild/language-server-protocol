<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['scalar' => 'string'])]
        public string $command,
        /**
         * Arguments that the command should be invoked with.
         *
         * @var list<mixed>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'mixed']], ['scalar' => 'null']]])]
        public ?array $arguments = null,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(['union' => [['union' => [['scalar' => 'int'], ['scalar' => 'string']]], ['scalar' => 'null']]])]
        public $workDoneToken = null
    ) {}
}
