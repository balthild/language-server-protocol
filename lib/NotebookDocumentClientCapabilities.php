<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Capabilities specific to the notebook document support.
 *
 * @phpstan-type NotebookDocumentSyncClientCapabilities array{dynamicRegistration?: bool, executionSummarySupport?: bool}
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class NotebookDocumentClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Capabilities specific to notebook document synchronization
         *
         * @var NotebookDocumentSyncClientCapabilities
         */
        #[Shape(new Shape\Record())]
        public array $synchronization
    ) {}
}
