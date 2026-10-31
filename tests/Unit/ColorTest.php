<?php

declare(strict_types=1);


namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use Phpactor\LanguageServerProtocol\Color;
use PHPUnit\Framework\TestCase;

class ColorTest extends TestCase
{
    public function testFromArray()
    {
        $color = Color::fromArray([
            'red' => 0,
            'green' => 100,
            'blue' => 50,
            'alpha' => 200,
        ]);

        self::assertEquals(new Color(0, 100, 50, 200), $color);
    }
}
