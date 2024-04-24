<?php
//Exercise 1
//Given variables (int) 10, string "10" determine if they both are the same.

$numb = 10 ;
$string = '10';

if ($numb === $string)
{
    echo 'values are equal'.PHP_EOL;
} else
{
    echo 'values are not equal'.PHP_EOL;
}

//Exercise 2
//Given variable (int) 50, determine if its in the range of 1 and 100.

$numx = 50;
if (($numx > 1) && ($numx < 100))
{
    echo "$numx is in range of 1-100".PHP_EOL;
} else
{
    echo "$numx is not in range of 1-100".PHP_EOL;
}

//Exercise 3
//Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".

$stringx = 'hello';

if ($stringx === 'hello')
{
    echo 'world'.PHP_EOL;
}

//Exercise 4
//By your choice, create condition with 3 checks.
//For example, if value is greater than X, less than Y and is an even number.

$inty = 16;

if ($inty > 14 && $inty <32 && $inty % 2 ==0 )
{
    echo "true".PHP_EOL;
} else
{
    echo "false".PHP_EOL;
}

//Exercise 5
//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.

$numbToCompare = 50;
$y = 20;
$z = 150;

if ($numbToCompare >$y && $numbToCompare <$z)
{
    echo "$numbToCompare is in range of $y and $z".PHP_EOL;
} else
{
    echo  "$numbToCompare is not in range of $y and $z".PHP_EOL;
}

//Exercise 6
//Create a variable $plateNumber that stores your car plate number.
//Create a switch statement that prints out that its your car in case of your number.

$plateNumber = 'XY-2024';

switch ($plateNumber)
{
    case 'XY-2024' ;
        echo "Your plate number is XY-2024".PHP_EOL;
        break;
    case 'AB-1990';
        echo "Your plate number is AB-1990".PHP_EOL;
        break;
    default:
        echo 'Its not your plate number'.PHP_EOL;
}

//Exercise 7
//Create a variable $number with integer by your choice.
//Create a switch statement that prints out text "low" if the value is under 50, "medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.

$number= 102;

switch ($number)
{
    case $number >100;
        echo 'high'.PHP_EOL;
        break;

    case $number <100 && $number >50:
        echo 'medium'.PHP_EOL;
        break;

    case $number <50;
        echo 'low'.PHP_EOL;
        break;



}
