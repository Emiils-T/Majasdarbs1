<?php

$input = floatval(readline('Enter number: '));

if ($input > 0) {
    echo "$input is positive \n";
} elseif ($input < 0) {
    echo "$input is negative \n";
} elseif ($input == 0) {
    echo "$input is 0 \n";
} else {
    echo "Enter numeric value";
}
