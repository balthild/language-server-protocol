<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(Location::class)]
        public Location $location,

        /**
         * The message of this related diagnostic information.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $message
    ) {}
}
