<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['scalar' => 'string'])]
        public string $kind,
        /**
         * The file to delete.
         */
        #[Shape(['scalar' => 'string'])]
        public string $uri,
        /**
         * Delete options.
         */
        #[Shape(['union' => [['class' => DeleteFileOptions::class], ['scalar' => 'null']]])]
        public ?DeleteFileOptions $options = null,
        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $annotationId = null
    ) {
        $this->uri = urldecode($uri);
    }
}
