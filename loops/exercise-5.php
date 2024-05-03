<?php
/*Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet" (based on the game "Pig").
The player's goal is to accumulate as many points as possible without rolling a 1.
Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0.
Otherwise, they add this number to their running total score.
The player then chooses whether to roll again, or end the game with their current point total.
Here is an example dialogue where the user plays until rolling a 1, which ends the game with 0 points:
*/
echo 'Welcome to Piglet!' . PHP_EOL;
$score = null;
$keepPlaying = true;

while ($keepPlaying) {
    $dice = rand(1, 6);
    if ($dice == 1) {
        echo 'You rolled a 1! ' . PHP_EOL;
        echo 'You got 0 points' . PHP_EOL;
        exit;
    }
    if ($dice > 1) {
        echo "You rolled a {$dice}! " . PHP_EOL;
        $score += $dice;
        $yOrN = (string)readline("Roll again? y or n: ");
        if ($yOrN == "y") {
            $keepPlaying = true;
        }
        if ($yOrN == "n") {
            echo "You got $score points." . PHP_EOL;
            $keepPlaying = false;
        }
    }
}