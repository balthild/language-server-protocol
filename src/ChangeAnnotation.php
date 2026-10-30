<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Additional information that describes document changes.
 */
class ChangeAnnotation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * A human-readable string describing the actual change. The string
         * is rendered prominent in the user interface.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $label,
        /**
         * A flag which indicates that user confirmation is needed
         * before applying the change.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $needsConfirmation = null,
        /**
         * A human-readable string which is rendered less prominent in
         * the user interface.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $description = null
    ) {}
}
