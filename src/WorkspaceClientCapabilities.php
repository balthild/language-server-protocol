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
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $applyEdit = null,
        /**
         * Capabilities specific to `WorkspaceEdit`s.
         */
        #[Shape(['union' => [['class' => WorkspaceEditClientCapabilities::class], ['scalar' => 'null']]])]
        public ?WorkspaceEditClientCapabilities $workspaceEdit = null,
        /**
         * Capabilities specific to the `workspace/didChangeConfiguration` notification.
         */
        #[Shape(['union' => [['class' => DidChangeConfigurationClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DidChangeConfigurationClientCapabilities $didChangeConfiguration = null,
        /**
         * Capabilities specific to the `workspace/didChangeWatchedFiles` notification.
         */
        #[Shape(['union' => [['class' => DidChangeWatchedFilesClientCapabilities::class], ['scalar' => 'null']]])]
        public ?DidChangeWatchedFilesClientCapabilities $didChangeWatchedFiles = null,
        /**
         * Capabilities specific to the `workspace/symbol` request.
         */
        #[Shape(['union' => [['class' => WorkspaceSymbolClientCapabilities::class], ['scalar' => 'null']]])]
        public ?WorkspaceSymbolClientCapabilities $symbol = null,
        /**
         * Capabilities specific to the `workspace/executeCommand` request.
         */
        #[Shape(['union' => [['class' => ExecuteCommandClientCapabilities::class], ['scalar' => 'null']]])]
        public ?ExecuteCommandClientCapabilities $executeCommand = null,
        /**
         * The client has support for workspace folders.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $workspaceFolders = null,
        /**
         * The client supports `workspace/configuration` requests.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $configuration = null,
        /**
         * Capabilities specific to the semantic token requests scoped to the
         * workspace.
         */
        #[Shape(['union' => [['class' => SemanticTokensWorkspaceClientCapabilities::class], ['scalar' => 'null']]])]
        public ?SemanticTokensWorkspaceClientCapabilities $semanticTokens = null,
        /**
         * Capabilities specific to the code lens requests scoped to the
         * workspace.
         */
        #[Shape(['union' => [['class' => CodeLensWorkspaceClientCapabilities::class], ['scalar' => 'null']]])]
        public ?CodeLensWorkspaceClientCapabilities $codeLens = null,
        /**
         * The client has support for file notifications/requests for user operations on files.
         *
         * Since 3.16.0
         */
        #[Shape(['union' => [['class' => FileOperationClientCapabilities::class], ['scalar' => 'null']]])]
        public ?FileOperationClientCapabilities $fileOperations = null,
        /**
         * Capabilities specific to the inline values requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $inlineValue = null,
        /**
         * Capabilities specific to the inlay hint requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $inlayHint = null,
        /**
         * Capabilities specific to the diagnostic requests scoped to the
         * workspace.
         *
         * @var array{refreshSupport?: bool}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $diagnostics = null
    ) {}
}
