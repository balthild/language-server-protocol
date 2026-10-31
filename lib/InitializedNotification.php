<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The initialized notification is sent from the client to the
 * server after the client is fully initialized and the server
 * is allowed to send requests from the server to the client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface InitializedNotification
{
    public const METHOD = 'initialized';
}
