<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * How a completion was triggered
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface CompletionTriggerKind
{
    public const INVOKED = 1;
    public const TRIGGER_CHARACTER = 2;
    public const TRIGGER_FOR_INCOMPLETE_COMPLETIONS = 3;
}
