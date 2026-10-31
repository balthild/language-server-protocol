<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(new Shape\Scalar('string'))]
        public string $kind,

        /**
         * The old (existing) location.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $oldUri,

        /**
         * The new location.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $newUri,

        /**
         * Rename options.
         */
        #[Shape(new Shape\Union(RenameFileOptions::class, new Shape\Scalar('null')))]
        public ?RenameFileOptions $options = null,

        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $annotationId = null
    ) {
        $this->oldUri = \urldecode($oldUri);
        $this->newUri = \urldecode($newUri);
    }
}
