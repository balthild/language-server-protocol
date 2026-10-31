<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to provide folding ranges in a document. The request's
 * parameter is of type [FoldingRangeParams](#FoldingRangeParams), the
 * response is of type [FoldingRangeList](#FoldingRangeList) or a Thenable
 * that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.foldingRange.d.ts
 */
interface FoldingRangeRequest
{
    public const METHOD = 'textDocument/foldingRange';
}
