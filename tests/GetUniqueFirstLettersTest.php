<?php

use PHPUnit\Framework\TestCase;

class GetUniqueFirstLettersTest extends TestCase
{
    protected function setUp(): void {}

    /**
     * @dataProvider airportsDataProvider
     * @param array $airports
     * @param string $expectedLetters
     */
    public function testFirstAirportsLetter(array $airports, string $expectedLetters): void
    {
        $this->assertEquals($expectedLetters, getUniqueFirstLetters($airports));
    }

    public function airportsDataProvider(): array
    {
        return [
            [
                [
                    [
                        "name" => "Albuquerque Sunport International Airport",
                        "code" => "ABQ",
                        "city" => "Albuquerque",
                        "state" => "New Mexico",
                        "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                        "timezone" => "America/Los_Angeles",
                    ],
                    [
                        "name" => "Nashville Metropolitan Airport 1",
                        "code" => "BNA",
                        "city" => "Nashville",
                        "state" => "Tennessee",
                        "address" => "1 Terminal Dr, Nashville, TN 37214, USA",
                        "timezone" => "America/Chicago",
                    ],
                    [
                        "name" => "Boise Airport",
                        "code" => "BOI",
                        "city" => "Boise",
                        "state" => "Idaho",
                        "address" => "3201 W Airport Way #1000, Boise, ID 83705, USA",
                        "timezone" => "America/Denver",
                    ],
                ],
                ['A', 'B', 'N']
            ]
        ];
    }
}
