<?php

use PHPUnit\Framework\TestCase;

class FilterByUniqueLetterTest extends TestCase
{
    protected function setUp(): void {}

    /**
     * @dataProvider airportsDataProvider
     * @param array $airports
     * @param string $filteredLetter
     * @param array $expectedAirports
     */
    public function testFilterByUniqueLetter(array $airports, string $filteredLetter, array $expectedAirports): void
    {
        $this->assertEquals($expectedAirports, filterByUniqueLetter($airports, $filteredLetter));
    }

    public function airportsDataProvider(): array
    {
        return [
            'Filter by A letter: ' => [
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
                'A',
                [
                    [
                        "name" => "Albuquerque Sunport International Airport",
                        "code" => "ABQ",
                        "city" => "Albuquerque",
                        "state" => "New Mexico",
                        "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                        "timezone" => "America/Los_Angeles"
                    ]
                ]
            ],
            'Filter by N letter: ' => [
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
                'N',
                [
                    [
                        "name" => "Nashville Metropolitan Airport 1",
                        "code" => "BNA",
                        "city" => "Nashville",
                        "state" => "Tennessee",
                        "address" => "1 Terminal Dr, Nashville, TN 37214, USA",
                        "timezone" => "America/Chicago",
                    ]
                ]
            ],
            'Filter by C letter: ' => [
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
                'C',
                []
            ],
        ];
    }
}
