<?php

use PHPUnit\Framework\TestCase;

class GetAirportsPerPageTest extends TestCase
{
    protected function setUp(): void {}

    /**
     * @dataProvider airportsDataProvider
     * @param array $airports
     * @param int $pageNumber
     * @param array $airportsForPage
     */
    public function testAirportsPerPage(array $airports, int $pageNumber, array $airportsForPage): void
    {
        $this->assertEquals($airportsForPage, getAirports($airports, $pageNumber));
    }

    public function airportsDataProvider(): array
    {
        return [
            'Get airports for 3rd page: ' => [
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
                        "name" => "Atlanta Hartsfield International Airport",
                        "code" => "ATL",
                        "city" => "Atlanta",
                        "state" => "Georgia",
                        "address" => "6000 N Terminal Pkwy, Atlanta, GA 30320, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Austin Bergstrom International Airport",
                        "code" => "AUS",
                        "city" => "Austin",
                        "state" => "Texas",
                        "address" => "3600 Presidential Blvd, Austin, TX 78719, USA",
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
                    [
                        "name" => "Boston Logan International Airport",
                        "code" => "BOS",
                        "city" => "Boston",
                        "state" => "Massachusetts",
                        "address" => "1 Harborside Dr, Boston, MA 02128, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Hollywood Burbank Airport",
                        "code" => "BUR",
                        "city" => "Burbank",
                        "state" => "California",
                        "address" => "2627 N Hollywood Way, Burbank, CA 91505, USA",
                        "timezone" => "America/Los_Angeles",
                    ],
                    [
                        "name" => "Baltimore Washington Airport",
                        "code" => "BWI",
                        "city" => "Baltimore",
                        "state" => "Maryland",
                        "address" => "Baltimore, MD 21240, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Charleston International Airport",
                        "code" => "CHS",
                        "city" => "Charleston",
                        "state" => "South Carolina",
                        "address" => "5500 International Blvd, Charleston, SC 29418, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Charlotte Douglas International Airport",
                        "code" => "CLT",
                        "city" => "Charlotte",
                        "state" => "North Carolina",
                        "address" => "5501 Josh Birmingham Pkwy, Charlotte, NC 28208, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Dallas Love Field",
                        "code" => "DAL",
                        "city" => "Dallas Love Field",
                        "state" => "Texas",
                        "address" => "8008 Herb Kelleher Way, Dallas, TX 75235, USA",
                        "timezone" => "America/Fort_Wayne",
                    ],
                    [
                        "name" => "Washington Ronald Reagan National Airport",
                        "code" => "DCA",
                        "city" => "Washington - DCA",
                        "state" => "Virginia",
                        "address" => "Arlington, VA 22202, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Denver International",
                        "code" => "DEN",
                        "city" => "Denver",
                        "state" => "Colorado",
                        "address" => "8500 Peña Blvd, Denver, CO 80249, USA",
                        "timezone" => "America/Denver",
                    ],
                    [
                        "name" => "Dallas Ft Worth International",
                        "code" => "DFW",
                        "city" => "Dallas/Ft Worth",
                        "state" => "Texas",
                        "address" => "2400 Aviation Dr, DFW Airport, TX 75261, USA",
                        "timezone" => "America/Chicago",
                    ],
                    [
                        "name" => "Detroit Metro Airport",
                        "code" => "DTW",
                        "city" => "Detroit",
                        "state" => "Michigan",
                        "address" => "Detroit, MI 48242, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Newark Liberty International Airport",
                        "code" => "EWR",
                        "city" => "Newark",
                        "state" => "New Jersey",
                        "address" => "3 Brewster Rd, Newark, NJ 07114, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Ft. Lauderdale Hollywood International Airport",
                        "code" => "FLL",
                        "city" => "Ft. Lauderdale",
                        "state" => "Florida",
                        "address" => "100 Terminal Dr, Fort Lauderdale, FL 33315, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Houston Hobby Airport",
                        "code" => "HOU",
                        "city" => "Houston",
                        "state" => "Texas",
                        "address" => "Houston, TX 77061, USA",
                        "timezone" => "America/Chicago",
                    ],
                    [
                        "name" => "Washington Dulles International Airport",
                        "code" => "IAD",
                        "city" => "Washington",
                        "state" => "Pennsylvania",
                        "address" => "1 Saarinen Cir, Dulles, VA 20166, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Houston Intercontinental Airport",
                        "code" => "IAH",
                        "city" => "Houston (IAH)",
                        "state" => "Texas",
                        "address" => "6135 Will Clayton Pkwy, Humble, TX 77338, USA",
                        "timezone" => "America/Chicago",
                    ],
                    [
                        "name" => "Indianapolis International Airport",
                        "code" => "IND",
                        "city" => "Indianapolis",
                        "state" => "Indiana",
                        "address" => "7800 Col. H. Weir Cook Memorial Dr, Indianapolis, IN 46241, USA",
                        "timezone" => "America/Indianapolis",
                    ],
                ],
                3,
                [
                    [
                        "name" => "Dallas Love Field",
                        "code" => "DAL",
                        "city" => "Dallas Love Field",
                        "state" => "Texas",
                        "address" => "8008 Herb Kelleher Way, Dallas, TX 75235, USA",
                        "timezone" => "America/Fort_Wayne",
                    ],
                    [
                        "name" => "Washington Ronald Reagan National Airport",
                        "code" => "DCA",
                        "city" => "Washington - DCA",
                        "state" => "Virginia",
                        "address" => "Arlington, VA 22202, USA",
                        "timezone" => "America/New_York",
                    ],
                    [
                        "name" => "Denver International",
                        "code" => "DEN",
                        "city" => "Denver",
                        "state" => "Colorado",
                        "address" => "8500 Peña Blvd, Denver, CO 80249, USA",
                        "timezone" => "America/Denver",
                    ],
                    [
                        "name" => "Dallas Ft Worth International",
                        "code" => "DFW",
                        "city" => "Dallas/Ft Worth",
                        "state" => "Texas",
                        "address" => "2400 Aviation Dr, DFW Airport, TX 75261, USA",
                        "timezone" => "America/Chicago",
                    ],
                    [
                        "name" => "Detroit Metro Airport",
                        "code" => "DTW",
                        "city" => "Detroit",
                        "state" => "Michigan",
                        "address" => "Detroit, MI 48242, USA",
                        "timezone" => "America/New_York",
                    ],
                ]
            ]
        ];
    }
}
