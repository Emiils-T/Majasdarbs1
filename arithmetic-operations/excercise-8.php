<?php
/*Exercise #8
Foo Corporation needs a program to calculate how much to pay their hourly employees.
The US Department of Labor requires that employees get paid time and a half for any hours over 40 that they work in a single week.
For example, if an employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay.
The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
Foo Corp requires that an employee not work more than 60 hours in a week.*/

$employee1 = [
    'basePay' => 7.5,
    'hoursWorked' => 35,
];
$employee2 = [
    'basePay' => 8.2,
    'hoursWorked' => 47,
];
$employee3 = [
    'basePay' => 10,
    'hoursWorked' => 73,
];

function salaryCalculator($personArray)
{
    $minimalPay = 8;
    $maxHours = 60;
    $regularHours = 40;
    $basePay = $personArray['basePay'];
    $hoursWorked = $personArray['hoursWorked'];

    $overtime = $hoursWorked - $regularHours;
    $overtimePay = $overtime * ($basePay * 1.5);

    $salary = 0;

    if ($basePay < $minimalPay) {
        echo "Error: base pay is less than $$minimalPay" . PHP_EOL;
        exit;
    }
    if ($hoursWorked > $maxHours) {
        echo "Error: hours worked exceeds $maxHours" . PHP_EOL;
        exit;
    }
    if ($hoursWorked - $regularHours <= 0) {
        $salary += $hoursWorked * $basePay;
    }
    if ($hoursWorked - $regularHours >= 0) {
        $salary += $overtimePay + $regularHours * $basePay;
    }
    return "$$salary" . PHP_EOL;
}

echo salaryCalculator($employee3);