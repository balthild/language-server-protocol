<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A document will save notification is sent from the client to the server before
 * the document is actually saved.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface WillSaveTextDocumentNotification
{
    public const METHOD = 'textDocument/willSave';
}
