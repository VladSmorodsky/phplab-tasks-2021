<?php

use PHPUnit\Framework\TestCase;

class CountArgumentsWrapperTest extends TestCase
{
    protected $functions;

    protected function setUp(): void
    {
        $this->functions = new functions\Functions();
    }

    /**
     * @dataProvider differentArgsDataProvider
     */
    public function testNegative($args): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->functions->countArgumentsWrapper(...$args);
    }

    public function differentArgsDataProvider(): array
    {
        return [
            [
                ['string1', 'string2', 'string3', 1],
            ],
            [
                ['string1', false, 'string3'],
            ],
            [
                ['string1', ['arr1'], 'string3'],
            ],
        ];
    }
}
