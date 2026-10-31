<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Request to resolve additional information for a given completion item.The request's
 * parameter is of type [CompletionItem](#CompletionItem) the response
 * is of type [CompletionItem](#CompletionItem) or a Thenable that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
interface CompletionResolveRequest
{
    public const METHOD = 'completionItem/resolve';
}
