<?php
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

define('ITEMS_PER_PAGE', 5);

function getUniqueFirstLetters(array $airports): array
{
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
    $foundAirports = array_filter($airports, function($airport) use ($uniqueLetter) {
        return ucfirst($airport['name'][0]) === ucfirst($uniqueLetter);
    });
    $column = array_column($foundAirports, 'name');
    array_multisort($column, SORT_ASC, $foundAirports);

    return $foundAirports;
}

function filterByState(array $airports, string $state): array
{
    return array_values(array_filter($airports, function($airport) use ($state) {
        return $airport['state'] === $state;
    }));
}

function sortAirportsBy(array $airports, string $columnName): array
{
    $column = array_column($airports, $columnName);
    array_multisort($column, SORT_ASC, $airports);

    return $airports;
}

function buildUrl(string $paramKey, string $value, ?string $customParams = null): string
{
    $urlParams = $customParams ?? $_SERVER['QUERY_STRING'];
    $fullParameter = $paramKey . '=' . $value;

    if (empty($urlParams)) {
        return "/?$fullParameter";
    }

    preg_match("/$paramKey=(.*?)(&|$)/", $urlParams, $matches, PREG_OFFSET_CAPTURE);
    if (count($matches) > 0) {
        if ($matches[count($matches)-1][1] < strlen($urlParams)) {
            $fullParameter .= '&';
        }
        $urlParams = preg_replace("/$paramKey=(.*?)(&|$)/", $fullParameter, $urlParams);
    } else {
        $urlParams .= "&$fullParameter";
    }
    $urlParams = resetPageFilter($paramKey, $urlParams);

    return '/?' . trim($urlParams, '&');
}

function resetPageFilter(string $paramKey, string $urlParams): string
{
    if (($paramKey === 'filter_by_state' || $paramKey === 'filter_by_first_letter')
        && isset($_GET['page'])) {
        return preg_replace('/(&|^)page=\d+/', '', $urlParams);
    }

    return $urlParams;
}

function countPage(array $airports): int
{
    return ceil(count($airports) / ITEMS_PER_PAGE);
}

function getAirports(array $airports, int $page = 0): array
{
    return array_slice($airports, getOffsetCount($page), ITEMS_PER_PAGE);
}

function getOffsetCount(int $page): int
{
    return $page > 1 ? ITEMS_PER_PAGE * ($page - 1) : 0;
}
