<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The result returned from the apply workspace edit request.
 */
class ApplyWorkspaceEditResult implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Indicates whether the edit was applied or not.
         */
        public bool $applied,
        /**
         * An optional textual description for why the edit was not applied.
         * This may be used by the server for diagnostic logging or to provide
         * a suitable error for a request that triggered the edit.
         */
        public ?string $failureReason = null,
        /**
         * Depending on the client's failure handling strategy `failedChange` might
         * contain the index of the change that failed. This property is only available
         * if the client signals a `failureHandlingStrategy` in its client capabilities.
         */
        public ?int $failedChange = null
    ) {}
}
