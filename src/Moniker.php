<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public string $scheme,
        /**
         * The identifier of the moniker. The value is opaque in LSIF however
         * schema owners are allowed to define the structure if they want.
         */
        public string $identifier,
        /**
         * The scope in which the moniker is unique
         *
         * @var UniquenessLevel::*
         */
        public $unique,
        /**
         * The moniker kind if known.
         *
         * @var MonikerKind::*|null
         */
        public $kind = null
    ) {}
}
