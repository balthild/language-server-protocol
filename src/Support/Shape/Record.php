<?php

declare(strict_types=1);

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * An array whose contents are not described, such as an anonymous object shape
 * in the protocol.
 *
 * Unlike {@see Mixed} this still requires an array, so a scalar or null in an
 * array position is rejected.
 */
final class Record implements Node {}
