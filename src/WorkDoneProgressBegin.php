<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class WorkDoneProgressBegin implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * @var 'begin'
         */
        #[Shape(['literal' => 'begin'])]
        public $kind,
        /**
         * Mandatory title of the progress operation. Used to briefly inform about
         * the kind of operation being performed.
         *
         * Examples: "Indexing" or "Linking dependencies".
         */
        #[Shape(['scalar' => 'string'])]
        public string $title,
        /**
         * Controls if a cancel button should show to allow the user to cancel the
         * long running operation. Clients that don't support cancellation are allowed
         * to ignore the setting.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $cancellable = null,
        /**
         * Optional, more detailed associated progress message. Contains
         * complementary information to the `title`.
         *
         * Examples: "3/25 files", "project/src/module2", "node_modules/some_dep".
         * If unset, the previous progress message (if any) is still valid.
         */
        #[Shape(['union' => [['scalar' => 'string'], ['scalar' => 'null']]])]
        public ?string $message = null,
        /**
         * Optional progress percentage to display (value 100 is considered 100%).
         * If not provided infinite progress is assumed and clients are allowed
         * to ignore the `percentage` value in subsequent in report notifications.
         *
         * The value should be steadily rising. Clients are free to ignore values
         * that are not following this rule. The value range is [0, 100].
         */
        #[Shape(['union' => [['scalar' => 'int'], ['scalar' => 'null']]])]
        public ?int $percentage = null
    ) {}
}
