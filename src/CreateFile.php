<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['scalar' => 'string'])]
        public string $kind,
        /**
         * The resource to create.
         */
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        /**
         * Additional options
         */
        #[Shape(['union' => [['class' => CreateFileOptions::class], ['scalar' => 'null']]])]
        public ?CreateFileOptions $options = null,
        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $annotationId = null
    ) {
        $this->uri = urldecode($uri);
    }
}
