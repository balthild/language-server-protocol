<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * The parameters of a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class ExecuteCommandParams extends WorkDoneProgressParams
{
    public function __construct(
        /**
         * The identifier of the actual command handler.
         */
        #[Shape(new Shape\Scalar('string'))]
        public string $command,

        /**
         * Arguments that the command should be invoked with.
         *
         * @var list<mixed>|null
         */
        #[Shape(new Shape\Union(new Shape\Sequence(new Shape\Scalar('mixed')), new Shape\Scalar('null')))]
        public ?array $arguments = null,

        /**
         * An optional token that a server can use to report work done progress.
         *
         * @var int|string|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(new Shape\Scalar('int'), new Shape\Scalar('string')),
                new Shape\Scalar('null'),
            ),
        )]
        public $workDoneToken = null
    ) {}
}
