<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to resolve additional properties for an inlay hint.
 * The request's parameter is of type [InlayHint](#InlayHint), the response is
 * of type [InlayHint](#InlayHint) or a Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.inlayHint.d.ts
 */
interface InlayHintResolveRequest
{
    public const METHOD = 'inlayHint/resolve';
}
