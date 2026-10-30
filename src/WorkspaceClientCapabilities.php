<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\Deserialize;
use Phpactor\LanguageServerProtocol\Support\FromArray;

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
        public ?bool $applyEdit = null,
        /**
         * Capabilities specific to `WorkspaceEdit`s.
         */
        #[Deserialize(WorkspaceEditClientCapabilities::class)]
        public ?WorkspaceEditClientCapabilities $workspaceEdit = null,
        /**
         * Capabilities specific to the `workspace/didChangeConfiguration` notification.
         */
        #[Deserialize(DidChangeConfigurationClientCapabilities::class)]
        public ?DidChangeConfigurationClientCapabilities $didChangeConfiguration = null,
        /**
         * Capabilities specific to the `workspace/didChangeWatchedFiles` notification.
         */
        #[Deserialize(DidChangeWatchedFilesClientCapabilities::class)]
        public ?DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles = null,
        /**
         * Capabilities specific to the `workspace/symbol` request.
         */
        #[Deserialize(WorkspaceSymbolClientCapabilities::class)]
        public ?WorkspaceSymbolClientCapabilities $symbol = null,
        /**
         * Capabilities specific to the `workspace/executeCommand` request.
         */
        #[Deserialize(ExecuteCommandClientCapabilities::class)]
        public ?ExecuteCommandClientCapabilities $executeCommand = null,
        /**
         * The client has support for workspace folders.
         */
        public ?bool $workspaceFolders = null,
        /**
         * The client supports `workspace/configuration` requests.
         */
        public ?bool $configuration = null,
        /**
         * Capabilities specific to the semantic token requests scoped to the
         * workspace.
         */
        #[Deserialize(SemanticTokensWorkspaceClientCapabilities::class)]
        public ?SemanticTokensWorkspaceClientCapabilities $semanticTokens = null,
        /**
         * Capabilities specific to the code lens requests scoped to the
         * workspace.
         */
        #[Deserialize(CodeLensWorkspaceClientCapabilities::class)]
        public ?CodeLensWorkspaceClientCapabilities $codeLens = null,
        /**
         * The client has support for file notifications/requests for user operations on files.
         *
         * Since 3.16.0
         */
        #[Deserialize(FileOperationClientCapabilities::class)]
        public ?FileOperationClientCapabilities $fileOperations = null,
        /**
         * Capabilities specific to the inline values requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        public ?array $inlineValue = null,
        /**
         * Capabilities specific to the inlay hint requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        public ?array $inlayHint = null,
        /**
         * Capabilities specific to the diagnostic requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        public ?array $diagnostics = null
    ) {}
}
