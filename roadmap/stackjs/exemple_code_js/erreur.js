// Gestion des Erreurs

// Gestion des erreurs avec try...catch
try {
    let resultat = 10 / 0;
    if (!isFinite(resultat)) {
        throw new Error('Division par zéro');
    }
    console.log(resultat);
} catch (error) {
    console.error('Erreur:', error.message);
}

// Gestion des erreurs avec promesses
const promesse = new Promise((resolve, reject) => {
    reject('Erreur dans la promesse');
});

promesse
    .then(resultat => console.log(resultat))
    .catch(error => console.error('Erreur:', error));
