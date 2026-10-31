<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to provide selection ranges in a document. The request's
 * parameter is of type [SelectionRangeParams](#SelectionRangeParams), the
 * response is of type [SelectionRange[]](#SelectionRange[]) or a Thenable
 * that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.selectionRange.d.ts
 */
interface SelectionRangeRequest
{
    public const METHOD = 'textDocument/selectionRange';
}
