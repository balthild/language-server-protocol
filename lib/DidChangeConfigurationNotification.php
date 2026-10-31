<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The configuration change notification is sent from the client to the server
 * when the client's configuration has changed. The notification contains
 * the changed configuration as defined by the language client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface DidChangeConfigurationNotification
{
    public const METHOD = 'workspace/didChangeConfiguration';
}
