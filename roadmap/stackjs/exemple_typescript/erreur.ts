// Gestion des Erreurs

function diviser(a: number, b: number): number {
    if (b === 0) {
        throw new Error('Division par zéro');
    }
    return a / b;
}

try {
    console.log(diviser(10, 2));
    console.log(diviser(10, 0));
} catch (error) {
    console.error('Erreur:', (error as Error).message);
}
