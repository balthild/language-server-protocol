<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Rename file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class RenameFile extends ResourceOperation
{
    public function __construct(
        /**
         * The resource operation kind.
         */
        public string $kind,
        /**
         * The old (existing) location.
         */
        public string $oldUri,
        /**
         * The new location.
         */
        public string $newUri,
        /**
         * Rename options.
         */
        #[Deserialize(RenameFileOptions::class)]
        public ?RenameFileOptions $options = null,
        /**
         * An optional annotation identifier describing the operation.
         */
        public ?string $annotationId = null,
    ) {
        $this->oldUri = urldecode($oldUri);
        $this->newUri = urldecode($newUri);
    }
}