<?php
/*Exercise #5
On your phone keypad, the alphabets are mapped to digits as follows:
ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).

Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.

Use:
a "nested-if" statement
a "switch-case-default" statement
Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,*/

$ABC = ['a', 'b', 'c'];
$DEF = ['d', 'e', 'f'];
$GHI = ['g', 'h', 'i'];
$JKL = ['j', 'k', 'l'];
$MNO = ['m', 'n', 'o'];
$PQRS = ['p', 'q', 'r', 's'];
$TUV = ['t', 'u', 'v'];
$WXYZ = ['w', 'x', 'y', 'z'];

$stringInput = strtolower(readline('Enter a string of letters: '));
$stringArray = str_split($stringInput);

$result=null;
for ($i = 0; $i < count($stringArray); $i++) {

    if (in_array($stringArray[$i], $ABC)) {
        $result.= 2;
    }
    if (in_array($stringArray[$i], $DEF)) {
        $result.= 3;
    }
    if (in_array($stringArray[$i], $GHI)) {
        $result.= 4;
    }
    if (in_array($stringArray[$i], $JKL)) {
        $result.= 5;
    }
    if (in_array($stringArray[$i], $MNO)) {
        $result.= 6;
    }
    if (in_array($stringArray[$i], $PQRS)) {
        $result.= 7;
    }
    if (in_array($stringArray[$i], $TUV)) {
        $result.= 8;
    }
    if (in_array($stringArray[$i], $WXYZ)) {
        $result.= 9;
    }
}
echo $result.PHP_EOL;
