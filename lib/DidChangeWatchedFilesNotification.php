<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The watched files notification is sent from the client to the server when
 * the client detects changes to file watched by the language client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface DidChangeWatchedFilesNotification
{
    public const METHOD = 'workspace/didChangeWatchedFiles';
}
