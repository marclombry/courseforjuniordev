<?php

// Require the Composer autoloader to load PHPUnit and Pest PHP
require 'vendor/autoload.php';

// PHPUnit Example Test Case
/*
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddition()
    {
        $result = 2 + 2;
        $this->assertEquals(4, $result);
    }
}
*/
// Pest PHP Example Test Case
/*
uses(Pest\Laravel\Testing\TestCase::class);

test('basic addition', function () {
    $result = 2 + 2;
    expect($result)->toBe(4);
});
*/
// Running PHPUnit and Pest PHP Tests
/*
PHPUnit\Framework\TestCase::class;
TestCase::run();
*/