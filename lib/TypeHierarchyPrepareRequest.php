<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * A request to result a `TypeHierarchyItem` in a document at a given position.
 * Can be used as an input to a subtypes or supertypes type hierarchy.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.typeHierarchy.d.ts
 */
interface TypeHierarchyPrepareRequest
{
    public const METHOD = 'textDocument/prepareTypeHierarchy';
}
