<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to show a document. This request might open an
 * external program depending on the value of the URI to open.
 * For example a request to open `https://code.visualstudio.com/`
 * will very likely open the URI in a WEB browser.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.showDocument.d.ts
 */
interface ShowDocumentRequest
{
    public const METHOD = 'window/showDocument';
}
