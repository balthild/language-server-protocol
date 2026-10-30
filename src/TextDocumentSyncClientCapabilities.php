<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class TextDocumentSyncClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether text document synchronization supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client supports sending will save notifications.
         */
        public ?bool $willSave = null,
        /**
         * The client supports sending a will save request and
         * waits for a response providing text edits which will
         * be applied to the document before it is saved.
         */
        public ?bool $willSaveWaitUntil = null,
        /**
         * The client supports did save notifications.
         */
        public ?bool $didSave = null
    ) {}
}
