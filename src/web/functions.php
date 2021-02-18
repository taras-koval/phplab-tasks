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
function getUniqueFirstLetters(array $airports)
{
    // put your logic here
    $firstLetters = array_map(function($item) {
        return ucfirst($item['name'][0]);
    }, $airports);

    $uniqueFirstLetters = array_unique($firstLetters);
    sort($uniqueFirstLetters);
    
    return $uniqueFirstLetters;
}

function filterByFirstLetter(array $airports, $letter)
{
    return array_filter($airports, function($item) use ($letter) {
        return $item['name'][0] === $letter;
    });
}

function filterByState(array $airports, $state)
{
    return array_filter($airports, function($item) use ($state) {
        return $item['state'] === $state;
    });
}

function sortByField(array &$airports, $field)
{
    usort($airports, function($a, $b) use ($field) {
        return strcmp($a[$field], $b[$field]);
    });
}