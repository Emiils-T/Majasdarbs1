<?php


$gameBoard = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];

$player = 'X';
function winCombinations($gameBoard, $player)
{
    //row
    if ($gameBoard[0][0] == $player && $gameBoard[0][1] == $player && $gameBoard[0][2] == $player) {
        return true;
    }
    if ($gameBoard[1][0] == $player && $gameBoard[1][1] == $player && $gameBoard[1][2] == $player) {
        return true;
    }
    if ($gameBoard[2][0] == $player && $gameBoard[2][1] == $player && $gameBoard[2][2] == $player) {
        return true;
    }
    //column
    if ($gameBoard[0][0] == $player && $gameBoard[1][0] == $player && $gameBoard[2][0] == $player) {
        return true;
    }
    if ($gameBoard[0][1] == $player && $gameBoard[1][1] == $player && $gameBoard[2][1] == $player) {
        return true;
    }
    if ($gameBoard[0][2] == $player && $gameBoard[1][2] == $player && $gameBoard[2][2] == $player) {
        return true;
    }
    //diagonal
    if ($gameBoard[0][0] == $player && $gameBoard[1][1] == $player && $gameBoard[2][2] == $player) {
        return true;
    }
    if ($gameBoard[2][0] == $player && $gameBoard[1][1] == $player && $gameBoard[0][2] == $player) {
        return true;
    } else {
        return false;
    }
}

function display_board($gameBoard)
{
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($j % 3 == 0) {
                echo PHP_EOL;
            }
            echo $gameBoard[$i][$j] . " ";
        }

    }
    echo PHP_EOL;
}

$tries = 0;
while ($tries < 9) {

    display_board($gameBoard);
    echo $tries;
    echo " Player $player ";

    $selectedMove = readline('choose your location (row, column):');
    list($row, $column) = explode(" ", $selectedMove);


    if ($row < 0 || $row > 2 || $column < 0 || $column > 2 || $gameBoard[$row][$column] !== '-') {
        echo 'Try again' . PHP_EOL;
        continue;
    }
    $gameBoard[$row][$column] = $player;
    $tries++;


    if (winCombinations($gameBoard, $player) == true) {
        display_board($gameBoard);
        echo 'Player ' . $player . ' Wins';
        break;
    } elseif ($tries === 9) {
        display_board($gameBoard);
        echo 'Game is a Tie';
        break;
    }
    if ($player === 'X') {
        $player = 'O';
    } else {
        $player = 'X';
    }

}



