<?php // Auto-generated from vscode-languageserver-protocol (typescript)

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol;

use Phpactor\LanguageServerProtocol\Support\ArrayDeserializable;
use Phpactor\LanguageServerProtocol\Support\FromArray;
use Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A document link is a range in a text document that links to an internal or external resource, like another
 * text document or a web site.
 *
 * @see vscode-languageserver-types/lib/esm/main.d.ts
 */
class DocumentLink implements ArrayDeserializable
{
    use FromArray;

    public function __construct(
        /**
         * The range this link applies to.
         */
        #[Shape(Range::class)]
        public Range $range,

        /**
         * The uri this link points to. If missing a resolve request is sent later.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $target = null,

        /**
         * The tooltip text when you hover over this link.
         *
         * If a tooltip is provided, is will be displayed in a string that includes instructions on how to
         * trigger the link, such as `{0} (ctrl + click)`. The specific instructions vary depending on OS,
         * user settings, and localization.
         */
        #[Shape(new Shape\Union(new Shape\Scalar('string'), new Shape\Scalar('null')))]
        public ?string $tooltip = null,

        /**
         * A data entry field that is preserved on a document link between a
         * DocumentLinkRequest and a DocumentLinkResolveRequest.
         *
         * @var mixed|null
         */
        #[Shape(new Shape\Union(new Shape\Unknown(), new Shape\Scalar('null')))]
        public $data = null
    ) {}
}
