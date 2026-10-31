<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Represents reasons why a text document is saved.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface TextDocumentSaveReason
{
    public const MANUAL = 1;
    public const AFTER_DELAY = 2;
    public const FOCUS_OUT = 3;
}
