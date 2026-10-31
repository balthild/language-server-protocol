<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to list all presentation for a color. The request's
 * parameter is of type [ColorPresentationParams](#ColorPresentationParams) the
 * response is of type [ColorInformation[]](#ColorInformation) or a Thenable
 * that resolves to such.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.colorProvider.d.ts
 */
interface ColorPresentationRequest
{
    public const METHOD = 'textDocument/colorPresentation';
}
