<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * Server Capabilities for a [SignatureHelpRequest](#SignatureHelpRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class SignatureHelpOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * List of characters that trigger signature help automatically.
         *
         * @var list<string>|null
         */
        public ?array $triggerCharacters = null,
        /**
         * List of characters that re-trigger signature help.
         *
         * These trigger characters are only active when signature help is already showing. All trigger characters
         * are also counted as re-trigger characters.
         *
         * @var list<string>|null
         */
        public ?array $retriggerCharacters = null,
        public ?bool $workDoneProgress = null
    ) {}
}
