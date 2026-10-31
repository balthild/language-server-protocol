<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Moniker definition to match LSIF 0.5 moniker definition.
 */
class Moniker implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The scheme of the moniker. For example tsc or .Net
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $scheme,

        /**
         * The identifier of the moniker. The value is opaque in LSIF however
         * schema owners are allowed to define the structure if they want.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $identifier,

        /**
         * The scope in which the moniker is unique
         *
         * @var UniquenessLevel::*
         */
        #[Shape(
            new Shape\Union(
                new Shape\Literal('document'),
                new Shape\Literal('project'),
                new Shape\Literal('group'),
                new Shape\Literal('scheme'),
                new Shape\Literal('global'),
            ),
        )]
        public $unique,

        /**
         * The moniker kind if known.
         *
         * @var MonikerKind::*|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Literal('import'), new Shape\Literal('export'), new Shape\Literal('local')),
                new Shape\Scalar('null'),
            ),
        )]
        public $kind = null
    ) {}
}
