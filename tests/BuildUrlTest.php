<?php

use PHPUnit\Framework\TestCase;

class BuildUrlTest extends TestCase
{
    protected function setUp(): void {}

    /**
     * @dataProvider urlDataProvider
     * @param string $paramKey
     * @param string $value
     * @param string $existedQueryString
     * @param string $expectedResult
     * @param int|null $pageNumberParamTest
     */
    public function testBuildUrl(string $paramKey,
                                 string $value,
                                 string $existedQueryString,
                                 string $expectedResult,
                                 int $pageNumberParamTest = null): void
    {
        if (!empty($pageNumberParamTest)) {
            $_GET['page'] = $pageNumberParamTest;
        }
        $this->assertEquals($expectedResult, buildUrl($paramKey, $value, $existedQueryString));
    }

    public function urlDataProvider(): array
    {
        return [
            'Apply filter_by_first_letter parameter: ' => [
                'filter_by_first_letter',
                'A',
                '',
                '/?filter_by_first_letter=A'
            ],
            'Apply filter_by_first_letter parameter with keeping filter_by_state parameter: ' => [
                'filter_by_first_letter',
                'A',
                'filter_by_state=Alabama',
                '/?filter_by_state=Alabama&filter_by_first_letter=A'
            ],
            '[PAGE PARAM TEST] Apply filter_by_first_letter parameter with return to first page: ' => [
                'filter_by_first_letter',
                'A',
                'page=2',
                '/?filter_by_first_letter=A',
                2
            ],
            'Apply NAME column sorting:' => [
                'sort',
                'name',
                'filter_by_state=Alabama&page=2',
                '/?filter_by_state=Alabama&page=2&sort=name'
            ],
            'Add sort by code param to url: ' => [
                'sort',
                'code',
                '',
                '/?sort=code'
            ],
            'Add sort by state param to url with existed filters: ' => [
                'sort',
                'state',
                'page=2',
                '/?page=2&sort=state'
            ],
            'Change existed SORT BY NAME to SORT BY STATE param: ' => [
                'sort',
                'state',
                'page=2&sort=name',
                '/?page=2&sort=state'
            ],
        ];
    }
}
