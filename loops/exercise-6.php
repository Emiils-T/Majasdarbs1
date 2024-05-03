<?php
/*Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.

////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************
Then, modify your program using an integer class constant so that it can create a similar figure of any size.
For instance, the diagram above has a size of 5. For example, the figure below has a size of 3:

////////\\\\\\\\
////********\\\\
****************
And the figure below has a size of 7:
*/


$levels = 7;


$totalWidth = $levels;
$totalWidth = ($totalWidth * 4) - 4;
$leftCharacter = '/';
$rightCharacter = "\\";
$character = '*';

for ($i = 1; $i <= $levels; $i++) {
    $result = '';
    $currentLevel = $i;
    $numberStarChar = $currentLevel * 4 - 4;

    $numberOfSpaces = $totalWidth - $numberStarChar;
    $result .= str_repeat($leftCharacter, $numberOfSpaces);

    $result .= str_repeat($character, $numberStarChar);
    $result .= str_repeat($character, $numberStarChar);

    $result .= str_repeat($rightCharacter, $numberOfSpaces);


    echo $result . PHP_EOL;
}

