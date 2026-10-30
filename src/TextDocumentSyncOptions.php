<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class TextDocumentSyncOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Open and close notifications are sent to the server. If omitted open close notification should not
         * be sent.
         */
        public ?bool $openClose = null,
        /**
         * Change notifications are sent to the server. See TextDocumentSyncKind.None, TextDocumentSyncKind.Full
         * and TextDocumentSyncKind.Incremental. If omitted it defaults to TextDocumentSyncKind.None.
         *
         * @var TextDocumentSyncKind::*|null
         */
        public $change = null,
        /**
         * If present will save notifications are sent to the server. If omitted the notification should not be
         * sent.
         */
        public ?bool $willSave = null,
        /**
         * If present will save wait until requests are sent to the server. If omitted the request should not be
         * sent.
         */
        public ?bool $willSaveWaitUntil = null,
        /**
         * If present save notifications are sent to the server. If omitted the notification should not be
         * sent.
         *
         * @var bool|SaveOptions|null
         */
        #[Deserialize(SaveOptions::class)]
        public $save = null,
    ) {
    }
}