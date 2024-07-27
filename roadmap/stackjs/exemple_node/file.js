// Révision des Concepts

const fs = require('fs');

// Lecture d'un fichier
fs.readFile('example.txt', 'utf8', (err, data) => {
    if (err) {
        console.error('Erreur de lecture du fichier:', err);
    } else {
        console.log('Contenu du fichier:', data);
    }
});
