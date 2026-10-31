<?php

declare(strict_types=1);


namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use Phpactor\LanguageServerProtocol\ClientCapabilities;
use PHPUnit\Framework\TestCase;

class ClientCapabiltitiesTest extends TestCase
{
    public function testFromArray()
    {
        $capbilities = ClientCapabilities::fromArray([
            'experimental' => [],
        ]);
        self::assertInstanceOf(ClientCapabilities::class, $capbilities);
    }
}
