<?php 
// yield is powerful and perform
function generateNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        yield $i; 
    }
}

$generator = generateNumbers(1, 5);

foreach ($generator as $number) {
    echo $number . " ";
}