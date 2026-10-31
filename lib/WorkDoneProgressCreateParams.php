<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkDoneProgressCreateParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The token to be used to report progress.
         *
         * @var int|string
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')))]
        public $token
    ) {}
}
