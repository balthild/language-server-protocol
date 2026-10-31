<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * Additional details for a completion item label.
 */
class CompletionItemLabelDetails implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * An optional string which is rendered less prominently directly after {@link CompletionItem.label label},
         * without any spacing. Should be used for function signatures and type annotations.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $detail = null,

        /**
         * An optional string which is rendered less prominently after {@link CompletionItem.detail}. Should be used
         * for fully qualified names and file paths.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $description = null
    ) {}
}
