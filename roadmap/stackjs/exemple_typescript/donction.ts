/**
 * // Fonctions et Génériques

// Fonction avec type générique
function identity<T>(arg: T): T {
    return arg;
}

console.log(identity<string>('Bonjour, TypeScript!'));
console.log(identity<number>(42));

// Fonction avec plusieurs paramètres
function concat<T>(a: T, b: T): T[] {
    return [a, b];
}

console.log(concat('Alice', 'Bob'));
console.log(concat(1, 2));

 */