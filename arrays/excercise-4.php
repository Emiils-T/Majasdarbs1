<?php
/*Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
It should copy all the elements of that array into another array of the same size.

Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.

*/


/*Create an array of ten integers
Fill the array with ten random numbers (1-100)
Copy the array into another array of the same capacity
Change the last value in the first array to a -7
Display the contents of both arrays
Array 1: 45 87 39 32 93 86 12 44 75 -7
Array 2: 45 87 39 32 93 86 12 44 75 50*/;

function randomArray()
{
    $array = [];
    $x = 10;

    for ($i = 1; $i <= $x; $i++) {
        $array[] = rand(1, 100);
    }

    $arrayCopy = $array;
    $array[count($array) - 1] = 7;

    $message = ['Array 1 :'];

    for ($i = 0; $i < count($array); $i++) {
        $message[] = $array[$i];

    }
    for ($i = 0; $i < count($message); $i++) {
        echo $message[$i] . " ";
    }
    echo PHP_EOL;

    $message2 = ['Array 2 :'];

    for ($i = 0; $i < count($arrayCopy); $i++) {
        $message2[] = $arrayCopy[$i];
    }
    for ($i = 0; $i < count($message2); $i++) {
        echo $message2[$i] . " ";
    }


}

randomArray();