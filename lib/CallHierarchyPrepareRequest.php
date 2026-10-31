<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to result a `CallHierarchyItem` in a document at a given position.
 * Can be used as an input to an incoming or outgoing call hierarchy.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.callHierarchy.d.ts
 */
interface CallHierarchyPrepareRequest
{
    public const METHOD = 'textDocument/prepareCallHierarchy';
}
