<?php
/*Exercise 7**
Imagine you own a gun store. Only certain guns can be purchased with license types.
Create an object (person) that will be the requester to purchase a gun (object) Person object has a name,
valid licenses (multiple) & cash.
Guns are objects stored within an array.
Each gun has license letter, price & name.
Using PHP in-built functions determine if the requester (person) can buy a gun from the store.*/
$person1 = [
    'name' => 'John Doe',
    'wallet' => 3000,
    'license' => ['A', 'B']
];
$person2 = [
    'name' => 'Timothy Blake',
    'wallet' => 15000,
    'license' => ['A', 'B', 'C', 'Z', 'Z1']
];

$guns = [
    [
        'name' => 'm4',
        'price' => 2000,
        'licenseLetter' => 'A'
    ],
    [
        'name' => 'glock',
        'price' => 500,
        'licenseLetter' => 'B'
    ],
    [
        'name' => 'shotgun',
        'price' => 1500,
        'licenseLetter' => 'C'
    ],
    [
        'name' => 'AWP',
        'price' => 5000,
        'licenseLetter' => 'Z'
    ],
    [
        'name' => 'mini-gun',
        'price' => 10000,
        'licenseLetter' => 'Z1'
    ]
];
function canPersonBuy($personArray, $gunName, $gunArray)
{
    $selectedGun = '';
    foreach ($gunArray as $gunItem) {
        if ($gunItem['name'] === $gunName) {
            $selectedGun = $gunItem;
            break;
        }
    }

    if (in_array($selectedGun['licenseLetter'], $personArray['license']) && $personArray['wallet'] >= $selectedGun['price']) {
        echo "{$personArray['name']} can buy {$selectedGun['name']}." . PHP_EOL;
    } else {
        echo "{$personArray['name']} cannot buy {$selectedGun['name']}." . PHP_EOL;
    }

}

canPersonBuy($person1, 'mini-gun', $guns);
