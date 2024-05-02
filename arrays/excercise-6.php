<?php

$gameWords = [
    'codelex',
    'goat',
    'leviathan',
    'bomb',

];
$random = array_rand($gameWords);
$selectedWord = $gameWords[$random];
//
echo $selectedWord . PHP_EOL;
//
$selectedWordArray = str_split($selectedWord);
//
$character = '- ';
$maskedWord = $selectedWordArray;
for ($i = 0; $i < count($selectedWordArray); $i++) {
    $maskedWord[$i] = $character;
}

$misses = [];
function displayGame($maskedWord, $misses)
{
    echo '-=-=-=-=-=-=-=-=-=-=-=-=-=-' . PHP_EOL . PHP_EOL;
    echo 'Word: ';
    for ($i = 0; $i < count($maskedWord); $i++) {
        echo $maskedWord[$i] . " ";
    }
    echo PHP_EOL;
    echo "Misses: ";
    for ($i = 0; $i < count($misses); $i++) {
        echo $misses[$i];
    }
    echo PHP_EOL . PHP_EOL;
}

$maxTries= 3;
$tries = 0;
while ($tries < $maxTries) {

    displayGame($maskedWord, $misses);

    $userInput = strtolower(readline('Enter letter: '));
    $found=null;
    if(strlen($userInput==1) && !in_array($userInput, $maskedWord) && !in_array($userInput, $misses)) {
        $found=false;
    }

    for ($i = 0; $i < count($selectedWordArray); $i++) {
        if ($selectedWordArray[$i] === $userInput) {
            $maskedWord[$i] = $userInput;
            $found = true;
        }
    }

    if (!$found) {
        $misses[] = $userInput;
        $tries++;
    }

    if ($tries == 3) {
        displayGame($maskedWord, $misses);
        echo 'You lose' . PHP_EOL;
        echo 'The word was: ' . $selectedWord . PHP_EOL;
        break;
    }
    if ($maskedWord === $selectedWordArray) {
        displayGame($maskedWord, $misses);
        echo 'You win' . PHP_EOL;
        break;

    }

}



