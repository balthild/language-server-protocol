<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class FileSystemWatcher implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The glob pattern to watch. See {@link GlobPattern glob pattern} for more detail.
         *
         * @var string|RelativePattern
         */
        #[Deserialize(RelativePattern::class)]
        public $globPattern,
        /**
         * The kind of events of interest. If omitted it defaults
         * to WatchKind.Create | WatchKind.Change | WatchKind.Delete
         * which is 7.
         *
         * @var WatchKind::*|null
         */
        public $kind = null,
    ) {
    }
}