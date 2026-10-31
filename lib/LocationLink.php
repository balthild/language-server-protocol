<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Represents the connection of two locations. Provides additional metadata over normal [locations](#Location),
 * including an origin range.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class LocationLink implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The target resource identifier of this link.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $targetUri,

        /**
         * The full target range of this link. If the target for example is a symbol then target range is the
         * range enclosing this symbol not including leading/trailing whitespace but everything else
         * like comments. This information is typically used to highlight the range in the editor.
         */
        #[Shape(Range::class)]
        public Range $targetRange,

        /**
         * The range that should be selected and revealed when this link is being followed, e.g the name of a function.
         * Must be contained by the `targetRange`. See also `DocumentSymbol#range`
         */
        #[Shape(Range::class)]
        public Range $targetSelectionRange,

        /**
         * Span of the origin of this link.
         *
         * Used as the underlined span for mouse interaction. Defaults to the word range at
         * the definition position.
         */
        #[Shape(new Shape\Union(Range::class, new Shape\Scalar('null')))]
        public ?Range $originSelectionRange = null
    ) {
        $this->targetUri = \urldecode($targetUri);
    }
}
