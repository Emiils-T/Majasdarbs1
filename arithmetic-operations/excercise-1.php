<?php

/*Exercise #1
Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.*/


function checkSum($intX,$intY)
{
    $intSum = $intX + $intY;
    $intDiff = abs($intX - $intY);

    if ($intX === 15 || $intY === 15 || $intSum === 15 || $intDiff === 15) {
        echo 'true' . PHP_EOL;
    } else {
        echo "false" . PHP_EOL;
    }

    echo $intDiff . PHP_EOL;
    echo $intSum . PHP_EOL;
}

checkSum(10,5);