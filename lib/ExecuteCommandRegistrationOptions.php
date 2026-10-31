<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Registration options for a [ExecuteCommandRequest](#ExecuteCommandRequest).
 *
 * Mixins (implemented TS interfaces): ExecuteCommandOptions
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class ExecuteCommandRegistrationOptions extends ExecuteCommandOptions
{
    public function __construct(
        /**
         * The commands to be executed on the server
         *
         * @var list<string>
         */
        #[Shape(new Shape\Sequence(new Shape\Scalar('string')))]
        public array $commands,

        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workDoneProgress = null
    ) {}
}
