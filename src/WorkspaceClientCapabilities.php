<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Workspace specific client capabilities.
 */
class WorkspaceClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The client supports applying batch edits
         * to the workspace by supporting the request
         * 'workspace/applyEdit'
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $applyEdit = null,

        /**
         * Capabilities specific to `WorkspaceEdit`s.
         */
        #[Shape(new Shape\Union(WorkspaceEditClientCapabilities::class, new Shape\Scalar('null')))]
        public ?WorkspaceEditClientCapabilities $workspaceEdit = null,

        /**
         * Capabilities specific to the `workspace/didChangeConfiguration` notification.
         */
        #[Shape(new Shape\Union(DidChangeConfigurationClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DidChangeConfigurationClientCapabilities $didChangeConfiguration = null,

        /**
         * Capabilities specific to the `workspace/didChangeWatchedFiles` notification.
         */
        #[Shape(new Shape\Union(DidChangeWatchedFilesClientCapabilities::class, new Shape\Scalar('null')))]
        public ?DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles = null,

        /**
         * Capabilities specific to the `workspace/symbol` request.
         */
        #[Shape(new Shape\Union(WorkspaceSymbolClientCapabilities::class, new Shape\Scalar('null')))]
        public ?WorkspaceSymbolClientCapabilities $symbol = null,

        /**
         * Capabilities specific to the `workspace/executeCommand` request.
         */
        #[Shape(new Shape\Union(ExecuteCommandClientCapabilities::class, new Shape\Scalar('null')))]
        public ?ExecuteCommandClientCapabilities $executeCommand = null,

        /**
         * The client has support for workspace folders.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $workspaceFolders = null,

        /**
         * The client supports `workspace/configuration` requests.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('bool'), new Shape\Scalar('null')))]
        public ?bool $configuration = null,

        /**
         * Capabilities specific to the semantic token requests scoped to the
         * workspace.
         */
        #[Shape(new Shape\Union(SemanticTokensWorkspaceClientCapabilities::class, new Shape\Scalar('null')))]
        public ?SemanticTokensWorkspaceClientCapabilities $semanticTokens = null,

        /**
         * Capabilities specific to the code lens requests scoped to the
         * workspace.
         */
        #[Shape(new Shape\Union(CodeLensWorkspaceClientCapabilities::class, new Shape\Scalar('null')))]
        public ?CodeLensWorkspaceClientCapabilities $codeLens = null,

        /**
         * The client has support for file notifications/requests for user operations on files.
         *
         * Since 3.16.0
         */
        #[Shape(new Shape\Union(FileOperationClientCapabilities::class, new Shape\Scalar('null')))]
        public ?FileOperationClientCapabilities $fileOperations = null,

        /**
         * Capabilities specific to the inline values requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $inlineValue = null,

        /**
         * Capabilities specific to the inlay hint requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $inlayHint = null,

        /**
         * Capabilities specific to the diagnostic requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        #[Shape(new Shape\Union(new Shape\Any(), new Shape\Scalar('null')))]
        public ?array $diagnostics = null
    ) {}
}
