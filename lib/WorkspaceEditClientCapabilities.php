<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * @phpstan-type FailureHandlingKind 'abort'|'transactional'|'undo'|'textOnlyTransactional'
 *
 * @see vscode-languageserver-protocol/lib/common/protocol.d.ts
 */
class WorkspaceEditClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The client supports versioned document changes in `WorkspaceEdit`s
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $documentChanges = null,

        /**
         * The resource operations the client supports. Clients should at least
         * support 'create', 'rename' and 'delete' files and folders.
         *
         * @var list<'create'|'rename'|'delete'>|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Sequence(
                    new Shape\Union(
                        new Shape\Literal('create'),
                        new Shape\Literal('rename'),
                        new Shape\Literal('delete'),
                    ),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public ?array $resourceOperations = null,

        /**
         * The failure handling strategy of a client if applying the workspace edit
         * fails.
         *
         * @var FailureHandlingKind|null
         */
        #[Shape(
            new Shape\Union(
                new Shape\Union(
                    new Shape\Literal('abort'),
                    new Shape\Literal('transactional'),
                    new Shape\Literal('undo'),
                    new Shape\Literal('textOnlyTransactional'),
                ),
                new Shape\Scalar('null'),
            ),
        )]
        public $failureHandling = null,

        /**
         * Whether the client normalizes line endings to the client specific
         * setting.
         * If set to `true` the client will normalize line ending characters
         * in a workspace edit to the client-specified new line
         * character.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $normalizesLineEndings = null,

        /**
         * Whether the client in general supports change annotations on text edits,
         * create file, rename file and delete file changes.
         *
         * @var array{groupsOnLabel?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Record(), new Shape\Scalar('null')))]
        public ?array $changeAnnotationSupport = null
    ) {}
}
