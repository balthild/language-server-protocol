<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Defines how the host (editor) should sync
 * document changes to the language server.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface TextDocumentSyncKind
{
    public const NONE = 0;
    public const FULL = 1;
    public const INCREMENTAL = 2;
}
