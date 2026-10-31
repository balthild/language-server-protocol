<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * Moniker uniqueness level to define scope of the moniker.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.moniker.d.ts
 */
interface UniquenessLevel
{
    public const DOCUMENT = 'document';
    public const PROJECT = 'project';
    public const GROUP = 'group';
    public const SCHEME = 'scheme';
    public const GLOBAL = 'global';
}
