<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to resolve the type definition locations of a symbol at a given text
 * document position. The request's parameter is of type [TextDocumentPositioParams]
 * (#TextDocumentPositionParams) the response is of type [Definition](#Definition) or a
 * Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.typeDefinition.d.ts
 */
interface TypeDefinitionRequest
{
    public const METHOD = 'textDocument/typeDefinition';
}
