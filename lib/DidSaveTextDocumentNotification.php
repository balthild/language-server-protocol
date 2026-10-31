<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The document save notification is sent from the client to the server when
 * the document got saved in the client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface DidSaveTextDocumentNotification
{
    public const METHOD = 'textDocument/didSave';
}
