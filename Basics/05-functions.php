<?php

/*Exercise 1
Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
Print this value out.*/

function codelex(string $word): string//pievienot condition ja ievada integer
{
    $concatenated = $word . ' codelex';
    return $concatenated . PHP_EOL;
}

;

echo codelex('hello');

/*Exercise 2
Create a function that accepts 2 integer arguments.
First argument is a base value and the second one is a value its been multiplied by.
For example, given argument 10 and 5 prints out 50*/
function multiplication(int $base, int $multiplier): int
{
    return $base * $multiplier;
}

;

echo multiplication(10, 5) . PHP_EOL;

/*Exercise 3
Create a person object with name, surname and age.
Create a function that will determine if the person has reached 18 years of age.
Print out if the person has reached age of 18 or not.*/

$person1 = [
    'name' => 'John',
    'surname' => 'Smith',
    'age' => 19
];

$person2 = [
    'name' => 'Jane',
    'surname' => 'Doe',
    'age' => 16
];

function isOfAge(array $array): string
{
    if ($array['age'] >= 18) {
        return "Person has reached 18";
    } else {
        return "Person is under 18";
    }
}

;

echo isOfAge($person2) . PHP_EOL;

/*Exercise 4
Create a array of objects that uses the function of exercise 3
but in loop printing out if the person has reached age of 18.*/

function loopIsOfAge(array $array): string
{
    $amountOfLoops = 4;
    if ($array['age'] >= 18) {
        $message = "Person has reached 18" . PHP_EOL;
    } else {
        $message = "Person is under 18" . PHP_EOL;
    }

    return str_repeat($message, $amountOfLoops);

}

;

echo loopIsOfAge($person2);


/*Exercise 5
Create a 2D associative array in 2nd dimension with fruits and their weight.
Create a function that determines if fruit has weight over 10kg. Create a secondary array with shipping costs per weight.
Meaning that you can say that over 10 kg shipping costs are 2 euros, otherwise its 1 euro.
Using foreach loop print out the values of the fruits and how much it would cost to ship this product./*/

$fruits = [
    [
        'name' => 'watermelon',
        'weight' => 15
    ],
    [
        'name' => 'tomato',
        'weight' => 6
    ],
    [
        'name' => 'pineapple',
        'weight' => 5
    ]
];


function shippingCostCalculator(array $array): string
{
    $shipping = ['under10kg' => 1, 'over10kg' => 2];
    $messageArray = [];
    foreach ($array as $fruit) {
        if ($fruit['weight'] >= 10) {
            $message1 = "{$fruit['name']} weight:{$fruit['weight']} shipping cost:{$shipping['over10kg']}";
            $messageArray[] = $message1;
        }
        if ($fruit['weight'] < 10) {
            $message2 = "{$fruit['name']} weight:{$fruit['weight']} shipping cost:{$shipping['under10kg']}";
            $messageArray[] = $message2;
        }
    }
    return implode(PHP_EOL, $messageArray);

}

echo shippingCostCalculator($fruits) . PHP_EOL;

/*Exercise 6
Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
Create a function that doubles the integer number.
Within the loop using php in-built function print out the double of the number value (using your custom function).*/


$arrayOfValues = [
    3,
    5,
    7,
    10.10,
    'codelex'
];

function doubleInteger($value): int
{
    $val = 0;
    if (is_int($value)) {
        $val = $value * 2;
    }
    return $val;
}

;

for ($i = 0; $i < count($arrayOfValues); $i++) {
    if (is_int($arrayOfValues[$i])) {
        echo doubleInteger($arrayOfValues[$i]) . PHP_EOL;
    }
}

