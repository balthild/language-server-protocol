<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

/**
 * The parameters of a [WorkspaceSymbolRequest](#WorkspaceSymbolRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams, PartialResultParams
 */
class WorkspaceSymbolParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * A query string to filter symbols by. Clients may send an empty
         * string here to request all symbols.
         */
        public string $query,
        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        public $workDoneToken = null,
        /**
         * An optional token that a server can use to report partial results (e.g. streaming) to
         * the client.
         *
         * @var int|string|null
         */
        public $partialResultToken = null
    ) {}
}
