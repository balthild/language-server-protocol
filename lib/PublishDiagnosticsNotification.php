<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Diagnostics notification are sent from the server to the client to signal
 * results of validation runs.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface PublishDiagnosticsNotification
{
    public const METHOD = 'textDocument/publishDiagnostics';
}
