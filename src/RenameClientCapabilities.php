<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;

class RenameClientCapabilities implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * Whether rename supports dynamic registration.
         */
        public ?bool $dynamicRegistration = null,
        /**
         * Client supports testing for validity of rename operations
         * before execution.
         */
        public ?bool $prepareSupport = null,
        /**
         * Client supports the default behavior result.
         * 
         * The value indicates the default behavior used by the
         * client.
         *
         * @var PrepareSupportDefaultBehavior::*|null
         */
        public $prepareSupportDefaultBehavior = null,
        /**
         * Whether the client honors the change annotations in
         * text edits and resource operations returned via the
         * rename request's workspace edit by for example presenting
         * the workspace edit in the user interface and asking
         * for confirmation.
         */
        public ?bool $honorsChangeAnnotations = null,
    ) {
    }
}