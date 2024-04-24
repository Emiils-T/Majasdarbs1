<?php
/*
Exercise 1
Create variable that prints out an integer 10, float 10.10, string "hello world"

Exercise 2
Dump the same values that should display both data type & its value. (Note, usage of var_dump)

Exercise 3
Concatenate your name, surname and integer of your age.
    */

$int = 10;
$float = 10.10;
$string = 'hello world';

echo $int.' '.$float.' '.$string. PHP_EOL;

$variables= [
    $int,
    $float,
    $string
];
var_dump($variables);

$name= 'Emils';
$surname = 'Timma';
$age = 26;

echo $name.' '.$surname.' '.$age. PHP_EOL;



