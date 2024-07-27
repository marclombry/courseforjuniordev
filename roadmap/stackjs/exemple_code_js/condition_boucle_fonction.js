// Structures de Contrôle

// Conditions
let age = 20;

if (age >= 18) {
    console.log('Vous êtes majeur.');
} else {
    console.log('Vous êtes mineur.');
}

// Boucles
// Boucle for
for (let i = 0; i < 5; i++) {
    console.log('i vaut', i);
}

// Boucle while
let compteur = 0;
while (compteur < 5) {
    console.log('compteur vaut', compteur);
    compteur++;
}

// Fonctions
function saluer(nom) {
    return `Bonjour, ${nom}!`;
}

console.log(saluer('Alice'));
