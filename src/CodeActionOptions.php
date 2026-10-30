<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Provider options for a [CodeActionRequest](#CodeActionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CodeActionOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * CodeActionKinds that this server may return.
         *
         * The list of kinds may be generic, such as `CodeActionKind.Refactor`, or the server
         * may list out every specific kind they provide.
         *
         * @var list<string>|null
         */
        #[Shape(['union' => [['list' => ['scalar' => 'string']], ['scalar' => 'null']]])]
        public ?array $codeActionKinds = null,
        /**
         * The server provides support to resolve additional
         * information for a code action.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $resolveProvider = null,
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workDoneProgress = null
    ) {}
}
