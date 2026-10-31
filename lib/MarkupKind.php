<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Describes the content type that a client supports in various
 * result literals like `Hover`, `ParameterInfo` or `CompletionItem`.
 *
 * Please note that `MarkupKinds` must not start with a `$`. This kinds
 * are reserved for internal usage.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
interface MarkupKind
{
    public const PLAIN_TEXT = 'plaintext';
    public const MARKDOWN = 'markdown';
}
