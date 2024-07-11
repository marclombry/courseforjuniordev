<?php 

/**
 * Test-Driven Development (TDD) is a software development methodology where tests are written before writing the functional code. 
 * The main goal of TDD is to ensure that the software being developed meets its requirements and behaves as expected from the start.
 *  Here’s a detailed explanation of TDD and its principles:
 */

 //Step1
echo $name; // undefined
$name =''; 
echo $name; // void
$name = 'John';
echo $name;
//Step2
//showName(); does not exist at the moment
//function showName(){}
/*
function showName(){
    return 'John';
}
*/
function showName(string $name) {
    return $name;
}

showName('John');