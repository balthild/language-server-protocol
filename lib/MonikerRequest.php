<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to get the moniker of a symbol at a given text document position.
 * The request parameter is of type [TextDocumentPositionParams](#TextDocumentPositionParams).
 * The response is of type [Moniker[]](#Moniker[]) or `null`.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.moniker.d.ts
 */
interface MonikerRequest
{
    public const METHOD = 'textDocument/moniker';
}
