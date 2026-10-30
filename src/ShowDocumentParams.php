<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Params to show a document.
 */
class ShowDocumentParams implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The document uri to show.
         */
        public string $uri,
        /**
         * Indicates to show the resource in an external program.
         * To show for example `https://code.visualstudio.com/`
         * in the default WEB browser set `external` to `true`.
         */
        public ?bool $external = null,
        /**
         * An optional property to indicate whether the editor
         * showing the document should take focus or not.
         * Clients might ignore this property if an external
         * program is started.
         */
        public ?bool $takeFocus = null,
        /**
         * An optional selection range if the document is a text
         * document. Clients might ignore the property if an
         * external program is started or the file is not a text
         * file.
         */
        #[Deserialize(Range::class)]
        public ?Range $selection = null
    ) {}
}
