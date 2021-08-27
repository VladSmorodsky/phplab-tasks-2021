<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsTest extends TestCase
{
    protected $functions;

    protected function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     * @dataProvider argsDataProvider
     */
    public function testWithArguments($args, $expected): void
    {
        $this->assertEquals($expected, $this->functions->countArguments(...$args));
    }

    public function argsDataProvider(): array
    {
        return [
            [
                [],
                [
                    'argument_count' => 0,
                    'argument_values' => [],
                ]
            ],
            [
                ['string1'],
                [
                    'argument_count' => 1,
                    'argument_values' => [ 0 => 'string1' ],
                ] 
            ],
            [
                ['string1', 'string2', 'string3'],
                [
                    'argument_count' => 3,
                    'argument_values' => [ 0 => 'string1',  1 => 'string2', 2 => 'string3'],
                ] 
            ],
        ];
    }
}
