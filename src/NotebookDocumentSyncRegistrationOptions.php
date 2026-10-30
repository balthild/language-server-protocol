<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * Mixins (implemented TS interfaces): StaticRegistrationOptions
 *
 * @phpstan-type NotebookDocumentFilter array{notebookType: string, scheme?: string, pattern?: string}|array{notebookType?: string, scheme: string, pattern?: string}|array{notebookType?: string, scheme?: string, pattern: string}
 */
class NotebookDocumentSyncRegistrationOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The notebooks to be synced
         *
         * @var list<(array{notebook: string|NotebookDocumentFilter, cells?: list<array{language: string}>}|array{notebook?: string|NotebookDocumentFilter, cells: list<array{language: string}>})>
         */
        public array $notebookSelector,
        /**
         * Whether save notification should be forwarded to
         * the server. Will only be honored if mode === `notebook`.
         */
        public ?bool $save = null,
        /**
         * The id used to register the request. The id can be used to deregister
         * the request again. See also Registration#id.
         */
        public ?string $id = null
    ) {}
}
