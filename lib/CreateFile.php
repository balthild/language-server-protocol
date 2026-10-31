<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Create file operation.
 *
 * Mixins (implemented TS interfaces): ResourceOperation
 */
class CreateFile extends ResourceOperation
{
    public function __construct(
        /**
         * The resource operation kind.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $kind,

        /**
         * The resource to create.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $uri,

        /**
         * Additional options
         */
        #[Shape(new Shape\Union(CreateFileOptions::class, new Shape\Scalar('null')))]
        public ?CreateFileOptions $options = null,

        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $annotationId = null
    ) {
        $this->uri = \urldecode($uri);
    }
}
