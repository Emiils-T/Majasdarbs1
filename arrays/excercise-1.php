<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

$sortedNumbers = $numbers;
sort($sortedNumbers);



for ($i = 0; $i < count($numbers); $i++) {

    if ($i > 0 && $i % 5 === 0) {
        echo "\n";
    }
    echo $numbers[$i] . ' ';
}
echo PHP_EOL;
echo PHP_EOL;




for ($i = 0; $i < count($sortedNumbers); $i++) {

    if ($i > 0 && $i % 5 === 0) {
        echo "\n";
    }
    echo $sortedNumbers[$i] . ' ';

}
echo PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];
$sortedWords = $words;
sort($sortedWords);


foreach ($words as $word) {
    echo $word . PHP_EOL;
}
echo PHP_EOL;


foreach ($sortedWords as $word) {
    echo $word . PHP_EOL;
}