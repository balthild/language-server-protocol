<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

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
         * @var array<string>|null
         */
        public ?array $codeActionKinds = null,
        /**
         * The server provides support to resolve additional
         * information for a code action.
         */
        public ?bool $resolveProvider = null,
        public ?bool $workDoneProgress = null,
    ) {
    }
}