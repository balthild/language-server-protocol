<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The did rename files notification is sent from the client to the server when
 * files were renamed from within the client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
interface DidRenameFilesNotification
{
    public const METHOD = 'workspace/didRenameFiles';
}
