<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A shutdown request is sent from the client to the server.
 * It is sent once when the client decides to shutdown the
 * server. The only notification that is sent after a shutdown request
 * is the exit event.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface ShutdownRequest
{
    public const METHOD = 'shutdown';
}
