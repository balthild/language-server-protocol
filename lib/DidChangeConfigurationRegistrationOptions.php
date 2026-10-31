<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class DidChangeConfigurationRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var string|list<string>|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('string'), new Shape\Sequence(new Shape\Scalar('string'))),
                new Shape\Scalar('null'),
            ),
        )]
        public $section = null
    ) {}
}
