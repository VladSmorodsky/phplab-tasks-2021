<?php

use PHPUnit\Framework\TestCase;

class GetOffsetCountTest extends TestCase
{
    protected function setUp(): void {}

    /**
     * @dataProvider pageCountDataProvider
     * @param int $page
     * @param int $offsetAirportItemsCount
     */
    public function testOffsetAirportsCount(int $page, int $offsetAirportItemsCount): void
    {
        $this->assertEquals($offsetAirportItemsCount, getOffsetCount($page));
    }

    public function pageCountDataProvider(): array
    {
        return [
            'Offset 0 items: '  => [1, 0],
            'Offset 10 items: ' => [3, 10],
            'Offset 20 items: ' => [5, 20],
        ];
    }
}
