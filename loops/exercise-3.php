<?php
/*Write a program that asks the user to enter two words. The program then prints out both words on one line.
The words will be separated by enough dots so that the total line length is 30:

Enter first word:
turtle
Enter second word
153
turtle....................153
This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.*/

$word1 = readline('Enter first word: ');
$word2 = readline('Enter second word: ');
$char = '.';
$maxCharCount = 30;

$wordCount = strlen($word1) + strlen($word2);
$charCount = $maxCharCount - $wordCount;


if ($wordCount <= $maxCharCount) {
    $concatenatedWords = $word1;
    for ($i = 0; $i < $charCount; $i++) {
        $concatenatedWords .= $char;
    }
    $concatenatedWords .= $word2;
    echo $concatenatedWords . PHP_EOL;
} else {
    echo 'Error: Entered words that were too long';
}


