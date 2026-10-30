<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Represents a related message and source code location for a diagnostic. This should be
 * used to point to code locations that cause or related to a diagnostics, e.g when duplicating
 * a symbol in a scope.
 */
class DiagnosticRelatedInformation implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The location of this related diagnostic information.
         */
        #[Deserialize(Location::class)]
        public Location $location,
        /**
         * The message of this related diagnostic information.
         */
        public string $message,
    ) {
    }
}