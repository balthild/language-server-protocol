<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(new Shape\Scalar('string'))]
        public string $kind,

        /**
         * The file to delete.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * Delete options.
         */
        #[Shape(new Shape\Union(DeleteFileOptions::class, new Shape\Scalar('null')))]
        public ?DeleteFileOptions $options = null,

        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $annotationId = null
    ) {
        $this->uri = urldecode($uri);
    }
}
