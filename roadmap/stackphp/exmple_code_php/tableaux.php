<?php
// Définition d'un tableau
$fruits = ["Pomme", "Banane", "Orange"];

// Ajout d'un élément au tableau
$fruits[] = "Raisin";

// Parcourir et afficher les éléments du tableau
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}

// Accéder à un élément spécifique du tableau
echo "Premier fruit: " . $fruits[0] . "\n";

// Modification d'un élément du tableau
$fruits[1] = "Mangue";
echo "Fruit modifié: " . $fruits[1] . "\n";
