<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

/**
 * Delete file operation
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class DeleteFile extends ResourceOperation
{
    public function __construct(
        /**
         * The resource operation kind.
         */
        public string $kind,
        /**
         * The file to delete.
         */
        public string $uri,
        /**
         * Delete options.
         */
        #[Deserialize(DeleteFileOptions::class)]
        public ?DeleteFileOptions $options = null,
        /**
         * An optional annotation identifier describing the operation.
         */
        public ?string $annotationId = null,
    ) {
        $this->uri = urldecode($uri);
    }
}