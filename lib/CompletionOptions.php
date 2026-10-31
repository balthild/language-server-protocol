<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Completion options.
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class CompletionOptions extends WorkDoneProgressOptions
{
    public function __construct(
        /**
         * Most tools trigger completion request automatically without explicitly requesting
         * it using a keyboard shortcut (e.g. Ctrl+Space). Typically they do so when the user
         * starts to type an identifier. For example if the user types `c` in a JavaScript file
         * code complete will automatically pop up present `console` besides others as a
         * completion item. Characters that make up identifiers don't need to be listed here.
         *
         * If code complete should automatically be trigger on characters not being valid inside
         * an identifier (for example `.` in JavaScript) list them in `triggerCharacters`.
         *
         * @var list<string>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('string')), new Shape\Scalar('null')))]
        public ?array $triggerCharacters = null,

        /**
         * The list of all possible characters that commit a completion. This field can be used
         * if clients don't support individual commit characters per completion item. See
         * `ClientCapabilities.textDocument.completion.completionItem.commitCharactersSupport`
         *
         * If a server provides both `allCommitCharacters` and commit characters on an individual
         * completion item the ones on the completion item win.
         *
         * @var list<string>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('string')), new Shape\Scalar('null')))]
        public ?array $allCommitCharacters = null,

        /**
         * The server provides support to resolve additional
         * information for a completion item.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $resolveProvider = null,

        /**
         * The server supports the following `CompletionItem` specific
         * capabilities.
         *
         * @var array{labelDetailsSupport?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $completionItem = null,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
