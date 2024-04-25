<?php
/*Exercise #2
Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd, or “Even Number” otherwise.
The program shall always print “bye!” before exiting.*/

function CheckOddEven($int){
    if ($int %2 === 0 ){
        echo 'Even number'.PHP_EOL;
        echo 'bye!'.PHP_EOL;
    } else{
        echo 'Odd Number'.PHP_EOL;
        echo 'bye!'.PHP_EOL;
    }
}

CheckOddEven(20);

