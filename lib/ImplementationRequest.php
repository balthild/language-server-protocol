<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to resolve the implementation locations of a symbol at a given text
 * document position. The request's parameter is of type [TextDocumentPositionParams]
 * (#TextDocumentPositionParams) the response is of type [Definition](#Definition) or a
 * Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.implementation.d.ts
 */
interface ImplementationRequest
{
    public const METHOD = 'textDocument/implementation';
}
