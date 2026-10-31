<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to provide inline values in a document. The request's parameter is of
 * type [InlineValueParams](#InlineValueParams), the response is of type
 * [InlineValue[]](#InlineValue[]) or a Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.inlineValue.d.ts
 */
interface InlineValueRequest
{
    public const METHOD = 'textDocument/inlineValue';
}
