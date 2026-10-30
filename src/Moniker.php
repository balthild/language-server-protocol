<?php // Auto-generated from vscode-languageserver-protocol (typescript)

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
        #[Shape(['scalar' => 'string'])]
        public string $scheme,
        /**
         * The identifier of the moniker. The value is opaque in LSIF however
         * schema owners are allowed to define the structure if they want.
         */
        #[Shape(['scalar' => 'string'])]
        public string $identifier,
        /**
         * The scope in which the moniker is unique
         *
         * @var UniquenessLevel::*
         */
        #[Shape([
            'union' => [
                ['literal' => 'document'],
                ['literal' => 'project'],
                ['literal' => 'group'],
                ['literal' => 'scheme'],
                ['literal' => 'global'],
            ],
        ])]
        public $unique,
        /**
         * The moniker kind if known.
         *
         * @var MonikerKind::*|null
         */
        #[Shape([
            'union' => [
                ['union' => [['literal' => 'import'], ['literal' => 'export'], ['literal' => 'local']]],
                ['scalar' => 'null'],
            ],
        ])]
        public $kind = null
    ) {}
}
