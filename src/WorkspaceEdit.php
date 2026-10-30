<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A workspace edit represents changes to many resources managed in the workspace. The edit
 * should either provide `changes` or `documentChanges`. If documentChanges are present
 * they are preferred over `changes` if the client can handle versioned document edits.
 *
 * Since version 3.13.0 a workspace edit can contain resource operations as well. If resource
 * operations are present clients need to execute the operations in the order in which they
 * are provided. So a workspace edit for example can consist of the following two changes:
 * (1) a create file a.txt and (2) a text document edit which insert text into file a.txt.
 *
 * An invalid sequence (e.g. (1) delete file a.txt and (2) insert text into file a.txt) will
 * cause failure of the operation. How the client recovers from the failure is described by
 * the client capability: `workspace.workspaceEdit.failureHandling`
 */
class WorkspaceEdit implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Holds changes to existing resources.
         *
         * @var array<string, list<TextEdit>>|null
         */
        #[Shape([
            'union' => [
                ['map' => [['scalar' => 'string'], ['list' => ['class' => TextEdit::class]]]],
                ['scalar' => 'null'],
            ],
        ])]
        public ?array $changes = null,
        /**
         * Depending on the client capability `workspace.workspaceEdit.resourceOperations` document changes
         * are either an array of `TextDocumentEdit`s to express changes to n different text documents
         * where each text document edit addresses a specific version of a text document. Or it can contain
         * above `TextDocumentEdit`s mixed with create, rename and delete file / folder operations.
         *
         * Whether a client supports versioned document edits is expressed via
         * `workspace.workspaceEdit.documentChanges` client capability.
         *
         * If a client neither supports `documentChanges` nor `workspace.workspaceEdit.resourceOperations` then
         * only plain `TextEdit`s using the `changes` property are supported.
         *
         * @var list<(TextDocumentEdit|CreateFile|RenameFile|DeleteFile)>|null
         */
        #[Shape([
            'union' => [
                [
                    'list' => [
                        'union' => [
                            ['class' => TextDocumentEdit::class],
                            ['class' => CreateFile::class],
                            ['class' => RenameFile::class],
                            ['class' => DeleteFile::class],
                        ],
                    ],
                ],
                ['scalar' => 'null'],
            ],
        ])]
        public ?array $documentChanges = null,
        /**
         * A map of change annotations that can be referenced in `AnnotatedTextEdit`s or create, rename and
         * delete file / folder operations.
         *
         * Whether clients honor this property depends on the client capability `workspace.changeAnnotationSupport`.
         *
         * @var array<string, ChangeAnnotation>|null
         */
        #[Shape([
            'union' => [
                ['map' => [['scalar' => 'string'], ['class' => ChangeAnnotation::class]]],
                ['scalar' => 'null'],
            ],
        ])]
        public ?array $changeAnnotations = null
    ) {}
}
