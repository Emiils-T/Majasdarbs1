<?php

$diceValueEqual = false;
$correctInput = false;
$userInput = null;

while ($correctInput == false) {
    $userInput = (int)readline('Enter desired sum from 2 to 12: ');
    if ($userInput >= 2 && $userInput <= 12) {
        $correctInput = true;
    } else {
        echo 'Invalid input: Enter value from 2 to 12 ' . PHP_EOL;
    }

}

while ($diceValueEqual == false) {

    $die1 = rand(1, 6);
    $die2 = rand(1, 6);
    $diceValue = $die2 + $die1;
    echo "$die1 and $die2 = $diceValue" . PHP_EOL;
    if ($userInput === $diceValue) {
        $diceValueEqual = true;
        break;
    }

}


