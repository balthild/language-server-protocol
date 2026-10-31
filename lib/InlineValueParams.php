<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 *
 * @phpstan-type InlineValueContext array{frameId: int, stoppedLocation: Range}
 */
class InlineValueParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The text document.
         */
        #[Shape(TextDocumentIdentifier::class)]
        public TextDocumentIdentifier $textDocument,

        /**
         * The document range for which inline values should be computed.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * Additional information about the context in which inline values were
         * requested.
         *
         * @var InlineValueContext
         */
        #[Shape(new Shape\Struct(['frameId' => new Shape\Scalar('int'), 'stoppedLocation' => Range::class]))]
        public array $context,

        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $workDoneToken = null
    ) {}
}
