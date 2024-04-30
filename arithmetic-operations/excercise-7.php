<?php

//Exercise #7
//Modify the example program to compute the position of an object after falling for 10 seconds,
//outputting the position in meters.
//The formula in Math notation is:

//Note: The correct value is -490.5m.

/*
 x(t)=0.5 * a*t^2 +vi*t + xi
a=-9.81
time= 10
vi-initial velocity= 0
xi initial position= 0

 * */

function objectPosition($time): string
{
    $acceleration = -9.81;
    $initialVelocity = 0;
    $initialPosition = 0;
    $timeDoubled = $time * $time;
    $result = 0.5 * ($acceleration * $timeDoubled) + ($initialVelocity * $time) + $initialPosition;
    return "Object position after falling $time seconds is {$result}m" . PHP_EOL;
}

echo objectPosition(10);