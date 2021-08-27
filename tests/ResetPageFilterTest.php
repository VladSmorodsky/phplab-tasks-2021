<?php

use PHPUnit\Framework\TestCase;

class ResetPageFilterTest extends TestCase
{
    private const PAGE_NUMBER = 1;

    protected function setUp(): void {}

    /**
     * @dataProvider urlDataProvider
     * @param string $paramKey
     * @param string $urlParams
     * @param string $filteredQueryString
     */
    public function testResetPageParam(string $paramKey, string $urlParams, string $filteredQueryString): void
    {
        $_GET['page'] = self::PAGE_NUMBER;
        $this->assertEquals($filteredQueryString, resetPageFilter($paramKey, $urlParams));
    }

    public function urlDataProvider(): array
    {
        return [
            'Reset page param after filter_by_state param added: ' => [
                'filter_by_state',
                'filter_by_state=Alabama&page=2',
                'filter_by_state=Alabama'
            ],
            'Reset page param after filter_by_first_letter param added: ' => [
                'filter_by_first_letter',
                'filter_by_first_letter=A&page=2',
                'filter_by_first_letter=A'
            ],
            'Keep page param after sort param added: ' => [
                'sort',
                'sort=A&page=2',
                'sort=A&page=2'
            ],
        ];
    }
}
