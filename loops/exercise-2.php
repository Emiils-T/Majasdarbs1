<?php

$input = (int)readline('Enter number: ');
$result=1;
for ($i = 0; $i < $input; $i++) {
    $result*= $input;

}
echo $result.PHP_EOL;

