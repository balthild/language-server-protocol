<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class WorkDoneProgressBegin implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var 'begin'
         */
        public $kind,
        /**
         * Mandatory title of the progress operation. Used to briefly inform about
         * the kind of operation being performed.
         * 
         * Examples: "Indexing" or "Linking dependencies".
         */
        public string $title,
        /**
         * Controls if a cancel button should show to allow the user to cancel the
         * long running operation. Clients that don't support cancellation are allowed
         * to ignore the setting.
         */
        public ?bool $cancellable = null,
        /**
         * Optional, more detailed associated progress message. Contains
         * complementary information to the `title`.
         * 
         * Examples: "3/25 files", "project/src/module2", "node_modules/some_dep".
         * If unset, the previous progress message (if any) is still valid.
         */
        public ?string $message = null,
        /**
         * Optional progress percentage to display (value 100 is considered 100%).
         * If not provided infinite progress is assumed and clients are allowed
         * to ignore the `percentage` value in subsequent in report notifications.
         * 
         * The value should be steadily rising. Clients are free to ignore values
         * that are not following this rule. The value range is [0, 100].
         */
        public ?int $percentage = null,
    ) {
    }
}