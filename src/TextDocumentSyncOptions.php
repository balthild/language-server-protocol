<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class TextDocumentSyncOptions implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Open and close notifications are sent to the server. If omitted open close notification should not
         * be sent.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $openClose = null,
        /**
         * Change notifications are sent to the server. See TextDocumentSyncKind.None, TextDocumentSyncKind.Full
         * and TextDocumentSyncKind.Incremental. If omitted it defaults to TextDocumentSyncKind.None.
         *
         * @var TextDocumentSyncKind::*|null
         */
        #[Shape([
            'union' => [['union' => [['literal' => 0], ['literal' => 1], ['literal' => 2]]], ['scalar' => 'null']],
        ])]
        public $change = null,
        /**
         * If present will save notifications are sent to the server. If omitted the notification should not be
         * sent.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $willSave = null,
        /**
         * If present will save wait until requests are sent to the server. If omitted the request should not be
         * sent.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $willSaveWaitUntil = null,
        /**
         * If present save notifications are sent to the server. If omitted the notification should not be
         * sent.
         *
         * @var bool|SaveOptions|null
         */
        #[Shape([
            'union' => [['union' => [['scalar' => 'bool'], ['class' => SaveOptions::class]]], ['scalar' => 'null']],
        ])]
        public $save = null
    ) {}
}
