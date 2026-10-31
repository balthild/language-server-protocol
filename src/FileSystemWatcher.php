<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

class FileSystemWatcher implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The glob pattern to watch. See {@link GlobPattern glob pattern} for more detail.
         *
         * @var string|RelativePattern
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), RelativePattern::class))]
        public $globPattern,

        /**
         * The kind of events of interest. If omitted it defaults
         * to WatchKind.Create | WatchKind.Change | WatchKind.Delete
         * which is 7.
         *
         * @var WatchKind::*|null
         */
        #[Shape(new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('null')))]
        public $kind = null
    ) {}
}
