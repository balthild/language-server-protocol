<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

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
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $dynamicRegistration = null,
        /**
         * The client support code action literals of type `CodeAction` as a valid
         * response of the `textDocument/codeAction` request. If the property is not
         * set the request can only return `Command` literals.
         *
         * @var array{codeActionKind: array{valueSet: list<string>}}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $codeActionLiteralSupport = null,
        /**
         * Whether code action supports the `isPreferred` property.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $isPreferredSupport = null,
        /**
         * Whether code action supports the `disabled` property.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $disabledSupport = null,
        /**
         * Whether code action supports the `data` property which is
         * preserved between a `textDocument/codeAction` and a
         * `codeAction/resolve` request.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $dataSupport = null,
        /**
         * Whether the client supports resolving additional code action
         * properties via a separate `codeAction/resolve` request.
         *
         * @var array{properties: list<string>}|null
         */
        #[Shape(['union' => [['any' => null], ['scalar' => 'null']]])]
        public ?array $resolveSupport = null,
        /**
         * Whether the client honors the change annotations in
         * text edits and resource operations returned via the
         * `CodeAction#edit` property by for example presenting
         * the workspace edit in the user interface and asking
         * for confirmation.
         */
        #[Shape(['union' => [['scalar' => 'bool'], ['scalar' => 'null']]])]
        public ?bool $honorsChangeAnnotations = null
    ) {}
}
