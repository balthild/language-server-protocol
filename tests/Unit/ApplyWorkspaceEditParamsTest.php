<?php

namespace Phpactor\LanguageServerProtocol\Tests\Unit;

use LanguageServerProtocol\WorkspaceEdit as LanguageServerProtocolWorkspaceEdit;
use Phpactor\LanguageServerProtocol\ApplyWorkspaceEditParams;
use Phpactor\LanguageServerProtocol\WorkspaceEdit;
use PHPUnit\Framework\TestCase;

class ApplyWorkspaceEditParamsTest extends TestCase
{
    public function testFromArray(): void
    {
        $workspaceParams = ApplyWorkspaceEditParams::fromArray([
            'edit' => [],
            'label' => 'foobar',
        ]);

        self::assertEquals(
            new ApplyWorkspaceEditParams(
                new WorkspaceEdit(),
                'foobar',
            ),
            $workspaceParams,
        );
    }

    public function testIgnoresObjects(): void
    {
        $workspaceParams = ApplyWorkspaceEditParams::fromArray([
            'edit' => new WorkspaceEdit(),
            'label' => 'foobar',
        ]);

        self::assertEquals(
            new ApplyWorkspaceEditParams(
                new WorkspaceEdit(),
                'foobar',
            ),
            $workspaceParams,
        );
    }
}
