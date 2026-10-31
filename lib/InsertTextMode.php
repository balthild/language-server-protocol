<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * How whitespace and indentation is handled during completion
 * item insertion.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
interface InsertTextMode
{
    public const AS_IS = 1;
    public const ADJUST_INDENTATION = 2;
}
