/**
 * // Classes et Objets

class Animal {
    nom: string;

    constructor(nom: string) {
        this.nom = nom;
    }

    parler(): void {
        console.log(`${this.nom} fait du bruit.`);
    }
}

class Chien extends Animal {
    aboyer(): void {
        console.log(`${this.nom} aboie.`);
    }
}

let monChien = new Chien('Rex');
monChien.parler();
monChien.aboyer();

 */