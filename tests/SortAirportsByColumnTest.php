<?php

use PHPUnit\Framework\TestCase;

class SortAirportsByColumnTest extends TestCase
{
    protected function setUp(): void {}

    /**
     * @dataProvider airportsDataProvider
     * @param array $airports
     * @param string $sortedColumn
     * @param array $sortedAirports
     */
    public function testSortAirportsByColumn(array $airports, string $sortedColumn, array $sortedAirports): void
    {
        $this->assertEquals($sortedAirports, sortAirportsBy($airports, $sortedColumn));
    }

    public function airportsDataProvider(): array
    {
        return [
            'Sort by NAME column: ' => [
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
                'name',
                [
                    [
                        "name" => "Albuquerque Sunport International Airport",
                        "code" => "ABQ",
                        "city" => "Albuquerque",
                        "state" => "New Mexico",
                        "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                        "timezone" => "America/Los_Angeles"
                    ],
                    [
                        "name" => "Boise Airport",
                        "code" => "BOI",
                        "city" => "Boise",
                        "state" => "Idaho",
                        "address" => "3201 W Airport Way #1000, Boise, ID 83705, USA",
                        "timezone" => "America/Denver",
                    ],
                    [
                        "name" => "Nashville Metropolitan Airport 1",
                        "code" => "BNA",
                        "city" => "Nashville",
                        "state" => "Tennessee",
                        "address" => "1 Terminal Dr, Nashville, TN 37214, USA",
                        "timezone" => "America/Chicago",
                    ],
                ]
            ],
            'Sort by CODE column: ' => [
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
                'code',
                [
                    [
                        "name" => "Albuquerque Sunport International Airport",
                        "code" => "ABQ",
                        "city" => "Albuquerque",
                        "state" => "New Mexico",
                        "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                        "timezone" => "America/Los_Angeles"
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
                ]
            ],
            'Sort by CITY column: ' => [
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
                'city',
                [
                    [
                        "name" => "Albuquerque Sunport International Airport",
                        "code" => "ABQ",
                        "city" => "Albuquerque",
                        "state" => "New Mexico",
                        "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                        "timezone" => "America/Los_Angeles"
                    ],
                    [
                        "name" => "Boise Airport",
                        "code" => "BOI",
                        "city" => "Boise",
                        "state" => "Idaho",
                        "address" => "3201 W Airport Way #1000, Boise, ID 83705, USA",
                        "timezone" => "America/Denver",
                    ],
                    [
                        "name" => "Nashville Metropolitan Airport 1",
                        "code" => "BNA",
                        "city" => "Nashville",
                        "state" => "Tennessee",
                        "address" => "1 Terminal Dr, Nashville, TN 37214, USA",
                        "timezone" => "America/Chicago",
                    ],
                ]
            ],
            'Sort by STATE column: ' => [
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
                'state',
                [
                    [
                        "name" => "Boise Airport",
                        "code" => "BOI",
                        "city" => "Boise",
                        "state" => "Idaho",
                        "address" => "3201 W Airport Way #1000, Boise, ID 83705, USA",
                        "timezone" => "America/Denver",
                    ],
                    [
                        "name" => "Albuquerque Sunport International Airport",
                        "code" => "ABQ",
                        "city" => "Albuquerque",
                        "state" => "New Mexico",
                        "address" => "2200 Sunport Blvd, Albuquerque, NM 87106, USA",
                        "timezone" => "America/Los_Angeles"
                    ],
                    [
                        "name" => "Nashville Metropolitan Airport 1",
                        "code" => "BNA",
                        "city" => "Nashville",
                        "state" => "Tennessee",
                        "address" => "1 Terminal Dr, Nashville, TN 37214, USA",
                        "timezone" => "America/Chicago",
                    ],
                ]
            ],
        ];
    }
}
