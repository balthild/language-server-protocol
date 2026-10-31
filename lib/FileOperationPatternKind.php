<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A pattern kind describing if a glob pattern matches a file a folder or
 * both.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.fileOperations.d.ts
 */
interface FileOperationPatternKind
{
    public const FILE = 'file';
    public const FOLDER = 'folder';
}
