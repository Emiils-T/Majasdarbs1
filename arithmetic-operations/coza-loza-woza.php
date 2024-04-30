<?php


function coza($intX, $intY)
{
    for ($i = $intX; $i <= $intY; $i++) {
        $number = '';

        if ($i % 3 == 0) {
            $number = $number . "Coza ";
        }
        if ($i % 5 == 0) {
            $number = $number . "Loza ";
        }
        if ($i % 7 == 0) {
            $number = $number . "Woza ";
        }
        $number = str_replace(" ", "", $number);
        if ($number === '') {
            echo $i . " ";
        } else {
            echo $number . " ";
        }

        if ($i % 11 == null) {
            echo PHP_EOL;
        }
    }
}

coza(1, 110);