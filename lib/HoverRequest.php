<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Request to request hover information at a given text document position. The request's
 * parameter is of type [TextDocumentPosition](#TextDocumentPosition) the response is of
 * type [Hover](#Hover) or a Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface HoverRequest
{
    public const METHOD = 'textDocument/hover';
}
