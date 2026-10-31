<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(new Shape\Scalar('bool'))]
        public bool $applied,

        /**
         * An optional textual description for why the edit was not applied.
         * This may be used by the server for diagnostic logging or to provide
         * a suitable error for a request that triggered the edit.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $failureReason = null,

        /**
         * Depending on the client's failure handling strategy `failedChange` might
         * contain the index of the change that failed. This property is only available
         * if the client signals a `failureHandlingStrategy` in its client capabilities.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public ?int $failedChange = null
    ) {}
}
