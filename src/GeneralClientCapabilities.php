<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * General client capabilities.
 */
class GeneralClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Client capability that signals how the client
         * handles stale requests (e.g. a request
         * for which the client will not process the response
         * anymore since the information is outdated).
         *
         * @var array{cancel:bool,retryOnContentModified:array<string>}|null
         */
        public ?array $staleRequestSupport = null,
        /**
         * Client capabilities specific to regular expressions.
         */
        #[Deserialize(RegularExpressionsClientCapabilities::class)]
        public ?RegularExpressionsClientCapabilities $regularExpressions = null,
        /**
         * Client capabilities specific to the client's markdown parser.
         */
        #[Deserialize(MarkdownClientCapabilities::class)]
        public ?MarkdownClientCapabilities $markdown = null,
        /**
         * The position encodings supported by the client. Client and server
         * have to agree on the same position encoding to ensure that offsets
         * (e.g. character position in a line) are interpreted the same on both
         * sides.
         * 
         * To keep the protocol backwards compatible the following applies: if
         * the value 'utf-16' is missing from the array of position encodings
         * servers can assume that the client supports UTF-16. UTF-16 is
         * therefore a mandatory encoding.
         * 
         * If omitted it defaults to ['utf-16'].
         * 
         * Implementation considerations: since the conversion from one encoding
         * into another requires the content of the file / line the conversion
         * is best done where the file is read which is usually on the server
         * side.
         *
         * @var array<string>|null
         */
        public ?array $positionEncodings = null,
    ) {
    }
}