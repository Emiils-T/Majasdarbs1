<?php
/*Write a program to produce the sum of 1, 2, 3, ..., to 100.
Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily. Also compute and display the average.
The output shall look like:

The sum of 1 to 100 is 5050
The average is 50.5*/

function numberSum($num1,$num2){
    $array = [];
    $sum=0;

    for ($i = $num1; $i <=$num2;$i++){
        $sum+=$i;
        array_push($array,$sum);
    }
    $arrayCount= count($array);
    $average= $sum / $arrayCount;

    echo "The sum of $num1 to $num2 is $sum".PHP_EOL;
    echo "The average is $average".PHP_EOL;
}

numberSum(1,100);