<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A code lens represents a [command](#Command) that should be shown along with
 * source text, like the number of references, a way to run tests, etc.
 *
 * A code lens is _unresolved_ when no command is associated to it. For performance
 * reasons the creation of a code lens and resolving should be done in two stages.
 */
class CodeLens implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range in which this code lens is valid. Should only span a single line.
         */
        #[Shape(['class' => Range::class])]
        public Range $range,
        /**
         * The command this code lens represents.
         */
        #[Shape(['union' => [['class' => Command::class], ['scalar' => 'null']]])]
        public ?Command $command = null,
        /**
         * A data entry field that is preserved on a code lens item between
         * a [CodeLensRequest](#CodeLensRequest) and a [CodeLensResolveRequest]
         * (#CodeLensResolveRequest)
         *
         * @var mixed|null
         */
        #[Shape(['union' => [['scalar' => 'mixed'], ['scalar' => 'null']]])]
        public $data = null
    ) {}
}
