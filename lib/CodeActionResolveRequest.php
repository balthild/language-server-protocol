<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Request to resolve additional information for a given code action.The request's
 * parameter is of type [CodeAction](#CodeAction) the response
 * is of type [CodeAction](#CodeAction) or a Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface CodeActionResolveRequest
{
    public const METHOD = 'codeAction/resolve';
}
