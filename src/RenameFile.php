<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['scalar' => 'string'])]
        public string $kind,
        /**
         * The old (existing) location.
         */
        #[Shape(['scalar' => 'string'])]
        public string $oldUri,
        /**
         * The new location.
         */
        #[Shape(['scalar' => 'string'])]
        public string $newUri,
        /**
         * Rename options.
         */
        #[Shape(['union' => [['class' => RenameFileOptions::class], ['scalar' => 'null']]])]
        public ?RenameFileOptions $options = null,
        /**
         * An optional annotation identifier describing the operation.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $annotationId = null
    ) {
        $this->oldUri = urldecode($oldUri);
        $this->newUri = urldecode($newUri);
    }
}
