<?php
//Exercise 1
//Create a non-associative array with 3 integer values and display the total sum of them.

$arraySum = [10,30,40];
echo array_sum($arraySum) . PHP_EOL;

//Exercise 2
//Given array
//Using dump method, dump out all 3 values.


$person1 = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person1) . PHP_EOL;

//Exercise 3
//Given object
//Using dump method, dump out all 3 values.


$person2 = new stdClass();
$person2->name = "John";
$person2->surname = "Doe";
$person2->age = 50;


var_dump($person2) . PHP_EOL;


//Given array
//Program should display concatenated value of - Jane Doe 41

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $items[0][1]["name"]." ".$items[0][1]["surname"]." ".$items[0][1]["age"].PHP_EOL;

/*Exercise 5
Given array
    Program should display concatenated value of - John & Jane Doe`s*/


$items1 = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items1[0][0]["name"]." & ".$items[0][1]["name"]." ".$items[0][1]["surname"]."'s";



