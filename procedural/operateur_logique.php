<?php
/*
Opérator AND (&&) :

true && true = true
true && false = false
false && true = false
false && false = false
Opérator OR (||) :

true || true = true
true || false = true
false || true = true
false || false = false
Opérator NOT (!) :

!true = false
!false = true


*/
// Logical AND operator (&&)
$condition1 = true;
$condition2 = false;

if ($condition1 && $condition2) {
    echo "Both conditions are true.";
} else {
    echo "At least one of the conditions is false.";
}

// Logical OR operator (||)
if ($condition1 || $condition2) {
    echo "At least one of the conditions is true.";
} else {
    echo "Both conditions are false.";
}

// Logical NOT operator (!)
if (!$condition1) {
    echo "The condition is false.";
} else {
    echo "The condition is true.";
}
?>
