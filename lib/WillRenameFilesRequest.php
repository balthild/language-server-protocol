<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The will rename files request is sent from the client to the server before files are actually
 * renamed as long as the rename is triggered from within the client.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
interface WillRenameFilesRequest
{
    public const METHOD = 'workspace/willRenameFiles';
}
