<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request send from the client to the server to execute a command. The request might return
 * a workspace edit which the client will apply to the workspace.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface ExecuteCommandRequest
{
    public const METHOD = 'workspace/executeCommand';
}
