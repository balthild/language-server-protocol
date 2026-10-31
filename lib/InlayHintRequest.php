<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to provide inlay hints in a document. The request's parameter is of
 * type [InlayHintsParams](#InlayHintsParams), the response is of type
 * [InlayHint[]](#InlayHint[]) or a Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.inlayHint.d.ts
 */
interface InlayHintRequest
{
    public const METHOD = 'textDocument/inlayHint';
}
