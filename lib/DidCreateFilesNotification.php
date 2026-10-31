<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The did create files notification is sent from the client to the server when
 * files were created from within the client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
interface DidCreateFilesNotification
{
    public const METHOD = 'workspace/didCreateFiles';
}
