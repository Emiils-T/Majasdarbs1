<?php

/*Exercise #4
Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
Take note that it is the same as factorial of N.*/

function factorial($int1,$int2)
{
    $sum = $int1;
    for ($i = $int1; $i <=$int2; $i++){
        $sum *=$i;

    }
    echo $sum;
};

factorial(1,10);