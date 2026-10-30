<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * A value of completely unknown type, as in the protocol's `LSPAny` fields.
 *
 * Unlike {@see Record} this accepts anything at all, including scalars and null.
 */
final class Unknown implements Node {}
