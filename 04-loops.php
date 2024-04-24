<?php
/*Exercise 1
Create an array with integers (up to 10) and print them out using foreach loop.*/

$numbers= [10,20,30,40,50,60];

foreach ($numbers as $x )
{
    echo $x.PHP_EOL;
}

/*Exercise 2
Create an array with integers (up to 10) and print them out using for loop.*/

$otherNumbers=[100,110,120,130,140,150,160];

for ($i = 0 ; $i < count($otherNumbers); $i++)
{
    echo $otherNumbers[$i].PHP_EOL;
}

/*Exercise 3
Given variable $x = 1 while $x is lower than 10, print out text "codelex". (Note: To avoid infinite looping, after each print increase the variable $x by 1)*/

$x= 1;
while ($x<10)
{
    echo 'codelex '.PHP_EOL;
    $x++;
}

/*Exercise 4
Create a non associative array with integers and print out only integers that divides by 3 without any left.*/



$integers = [1,2,3,4,5,6,7,8,9,12,15];

foreach ($integers as $val)
{
    if ($val % 3 == 0)
    {
        echo $val.PHP_EOL;
    }
}

/*Exercise 5
Create an associative array with objects of multiple persons.
Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.*/

$persons= [
    [
        'name'=>'Egils',
        'surname'=>'Levinkijs',
        'age'=>26,
        'birthday'=> '15.02.1998'
    ],
    [
        'name'=>'Edgars',
        'surname'=>'Liepkalns',
        'age'=>32,
        'birthday'=> '22.07.1992'
    ],
    [
        'name'=>'Marija',
        'surname'=>'Bērziņa',
        'age'=>21,
        'birthday'=> '22.04.2003'
    ]
];

foreach ( $persons as $key )
{
    echo $key[0][0];
}

