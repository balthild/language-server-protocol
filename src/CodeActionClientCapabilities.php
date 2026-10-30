<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

/**
 * The Client Capabilities of a [CodeActionRequest](#CodeActionRequest).
 */
class CodeActionClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether code action supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * The client support code action literals of type `CodeAction` as a valid
         * response of the `textDocument/codeAction` request. If the property is not
         * set the request can only return `Command` literals.
         *
         * @var array{codeActionKind:array{valueSet:array<string>}}|null
         */
        public ?array $codeActionLiteralSupport = null,
        /**
         * Whether code action supports the `isPreferred` property.
         */
        public ?bool $isPreferredSupport = null,
        /**
         * Whether code action supports the `disabled` property.
         */
        public ?bool $disabledSupport = null,
        /**
         * Whether code action supports the `data` property which is
         * preserved between a `textDocument/codeAction` and a
         * `codeAction/resolve` request.
         */
        public ?bool $dataSupport = null,
        /**
         * Whether the client supports resolving additional code action
         * properties via a separate `codeAction/resolve` request.
         *
         * @var array{properties:array<string>}|null
         */
        public ?array $resolveSupport = null,
        /**
         * Whether the client honors the change annotations in
         * text edits and resource operations returned via the
         * `CodeAction#edit` property by for example presenting
         * the workspace edit in the user interface and asking
         * for confirmation.
         */
        public ?bool $honorsChangeAnnotations = null,
    ) {
    }
}