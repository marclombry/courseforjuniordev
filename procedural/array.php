<?php 

// array //
$shoppingList = ['pizza','water','eggs','oil'];

echo $shoppingList[0];

$shoppingList[0] = 'fries';

echo $shoppingList[0];

//echo $shoppingList; // error
echo $shoppingList[2];
var_dump($shoppingList); //debug

// Exercice, montre moi l'élèment oil (huile)
// Exercice, show me the oil element

$tasks = [
    0 => 'learn programming',
    1 => 'practice programming',
    2 => 'find a job'
];

var_dump($tasks[1]);

$userList = [
    [
        'name' => 'Annie',
        'age' => 25,
        'job' => 'developper'
    ],
    [
        'name' => $name,
        'age' => $age,
        'job' => 'developper'
    ]
];

var_dump($userList);
