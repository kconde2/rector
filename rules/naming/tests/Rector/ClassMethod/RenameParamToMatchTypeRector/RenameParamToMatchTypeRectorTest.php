<?php

declare(strict_types=1);

namespace Rector\Naming\Tests\Rector\ClassMethod\RenameParamToMatchTypeRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector;
use Symplify\SmartFileSystem\SmartFileInfo;

final class RenameParamToMatchTypeRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return RenameParamToMatchTypeRector::class;
    }
}