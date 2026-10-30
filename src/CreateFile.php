<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Deserialize;

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
        public string $kind,
        /**
         * The resource to create.
         */
        public string $uri,
        /**
         * Additional options
         */
        #[Deserialize(CreateFileOptions::class)]
        public ?CreateFileOptions $options = null,
        /**
         * An optional annotation identifier describing the operation.
         */
        public ?string $annotationId = null,
    ) {
        $this->uri = urldecode($uri);
    }
}