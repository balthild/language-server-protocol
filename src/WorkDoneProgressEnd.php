<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkDoneProgressEnd implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var 'end'
         */
        #[Shape(new Shape\Literal('end'))]
        public $kind,

        /**
         * Optional, a final message indicating to for example indicate the outcome
         * of the operation.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $message = null
    ) {}
}
