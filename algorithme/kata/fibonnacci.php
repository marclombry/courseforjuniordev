<?php 
function fibonacci($n) {
    $sequence = [];
    $a = 0;
    $b = 1;

    while (count($sequence) < $n) {
        $sequence[] = $a;
        $next = $a + $b;
        $a = $b;
        $b = $next;
    }

    return $sequence;
}

// Example usage:
// $fibonacciSequence = fibonacci(10);
// print_r($fibonacciSequence);
