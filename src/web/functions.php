<?php

namespace web;
/**
 * The $airports variable contains array of arrays of airports (see airports.php)
 * What can be put instead of placeholder so that function returns the unique first letter of each airport name
 * in alphabetical order
 *
 * Create a PhpUnit test (GetUniqueFirstLettersTest) which will check this behavior
 *
 * @param  array  $airports
 * @return string[]
 */
function getUniqueFirstLetters(array $airports): array
{
    // put your logic here
    $firstLetters = [];
    foreach ( $airports as $airport) {
        if (! in_array($airport['name'][0], $firstLetters)) {
            $firstLetters[] = $airport['name'][0];
        }
    }
    sort($firstLetters);

    return $firstLetters;
}

function filterByUniqueLetter(array $airports, string $uniqueLetter): array
{
    $findedAirports = array_filter($airports, function($airport) use ($uniqueLetter) {
        return ucfirst($airport['name'][0]) === ucfirst($uniqueLetter);
    });
    array_multisort(array_column($findedAirports, 'name'), SORT_ASC, $findedAirports);

    return $findedAirports;
}

function filterByState(array $airports, string $state): array
{
    $findedAirports = array_filter($airports, function($airport) use ($state) {
        return $airport['state'] === $state;
    });

    return $findedAirports;
}