<?php
echo "Input number of terms: ";
$input=10;
$result=0;
for ($i = 0; $i < $input; $i++) {
     $result+=$input*$input;
}
echo $result;

