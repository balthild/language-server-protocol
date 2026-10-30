<?php

namespace Phpactor\LanguageServerProtocol\Support\Shape;

/**
 * One node of the tree describing the data a property accepts.
 *
 * A node is either a class-string, meaning "an object of this class built with
 * fromArray()", or one of the implementations in this namespace.
 */
interface Node {}
