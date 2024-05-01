<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];


function searchArray($valueToSearch, $array): string
{
    if (in_array($valueToSearch, $array, true)) {
        return "$valueToSearch is in array" . PHP_EOL;
    } else {
        return "$valueToSearch can't be found in array" . PHP_EOL;
    }
}

echo searchArray('1472', $numbers);