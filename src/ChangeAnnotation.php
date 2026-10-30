<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $label,
        /**
         * A flag which indicates that user confirmation is needed
         * before applying the change.
         */
        public ?bool $needsConfirmation = null,
        /**
         * A human-readable string which is rendered less prominent in
         * the user interface.
         */
        public ?string $description = null
    ) {}
}
