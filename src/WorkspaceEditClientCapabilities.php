<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkspaceEditClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The client supports versioned document changes in `WorkspaceEdit`s
         */
        public ?bool $documentChanges = null,
        /**
         * The resource operations the client supports. Clients should at least
         * support 'create', 'rename' and 'delete' files and folders.
         *
         * @var list<'create'|'rename'|'delete'>|null
         */
        public ?array $resourceOperations = null,
        /**
         * The failure handling strategy of a client if applying the workspace edit
         * fails.
         *
         * @var 'abort'|'transactional'|'undo'|'textOnlyTransactional'|null
         */
        public $failureHandling = null,
        /**
         * Whether the client normalizes line endings to the client specific
         * setting.
         * If set to `true` the client will normalize line ending characters
         * in a workspace edit to the client-specified new line
         * character.
         */
        public ?bool $normalizesLineEndings = null,
        /**
         * Whether the client in general supports change annotations on text edits,
         * create file, rename file and delete file changes.
         *
         * @var array{groupsOnLabel?: bool}|null
         */
        public ?array $changeAnnotationSupport = null
    ) {}
}
