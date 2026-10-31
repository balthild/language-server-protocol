<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to list all color symbols found in a given text document. The request's
 * parameter is of type [DocumentColorParams](#DocumentColorParams) the
 * response is of type [ColorInformation[]](#ColorInformation) or a Thenable
 * that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.colorProvider.d.ts
 */
interface DocumentColorRequest
{
    public const METHOD = 'textDocument/documentColor';
}
