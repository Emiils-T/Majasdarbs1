<?php
/*Exercise #9
Write a program that calculates and displays a person's body mass index (BMI).
A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
Where weight is measured in pounds and height is measured in inches.
Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
If the BMI is less than 18.5, the person is considered underweight. If the BMI value is greater than 25, the person is considered overweight.

Your program must accept metric units.*/

$person1=[
    'name'=>'Peter',
    'height'=>167,
    'weight'=>85
];
$person2=[
    'name'=>'Timothy',
    'height'=>190,
    'weight'=>68
];
$person3=[
    'name'=>'Ansel',
    'height'=>150,
    'weight'=>50
];


function bmiCalculation($personArray){
    $name = $personArray['name'];
    $weight=$personArray['weight'];
    $height=$personArray['height'];
    $bmi=$weight/pow($height/100,2);
    echo $bmi;
    if($bmi<18.5){
        return "$name is underweight".PHP_EOL;
    }if($bmi>=18.5 && $bmi<=25){
        return "$name is in optimal weight".PHP_EOL;
    }if($bmi>=25){
        return "$name is overweight".PHP_EOL;
    }else{
        return "error";
    }
}

echo bmiCalculation($person1);
echo bmiCalculation($person2);
echo bmiCalculation($person3);