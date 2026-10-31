<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

/**
 * The `window/workDoneProgress/cancel` notification is sent from  the client to the server to cancel a progress
 * initiated on the server side.
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.progress.d.ts
 */
interface WorkDoneProgressCancelNotification
{
    public const METHOD = 'window/workDoneProgress/cancel';
}
