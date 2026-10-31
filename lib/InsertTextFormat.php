<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Defines whether the insert text in a completion item should be interpreted as
 * plain text or a snippet.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
interface InsertTextFormat
{
    public const PLAIN_TEXT = 1;
    public const SNIPPET = 2;
}
