<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The `client/unregisterCapability` request is sent from the server to the client to unregister a previously registered capability
 * handler on the client side.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface UnregistrationRequest
{
    public const METHOD = 'client/unregisterCapability';
}
