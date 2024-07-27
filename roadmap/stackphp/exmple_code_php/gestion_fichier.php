<?php
// Écriture dans un fichier
$contenu = "Ceci est un test de contenu.";
file_put_contents("test.txt", $contenu);

// Lecture du contenu d'un fichier
$contenuLu = file_get_contents("test.txt");
echo "Contenu du fichier: $contenuLu\n";
