<?php
$nombre = 10;

// Conditionnelle if-else
if ($nombre > 0) {
    echo "$nombre est positif\n";
} elseif ($nombre < 0) {
    echo "$nombre est négatif\n";
} else {
    echo "$nombre est zéro\n";
}

// Boucle for
for ($i = 0; $i < 5; $i++) {
    echo "Valeur de i: $i\n";
}

// Boucle while
$i = 0;
while ($i < 5) {
    echo "Valeur de i dans la boucle while: $i\n";
    $i++;
}
