<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to list project-wide symbols matching the query string given
 * by the [WorkspaceSymbolParams](#WorkspaceSymbolParams). The response is
 * of type [SymbolInformation[]](#SymbolInformation) or a Thenable that
 * resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface WorkspaceSymbolRequest
{
    public const METHOD = 'workspace/symbol';
}
