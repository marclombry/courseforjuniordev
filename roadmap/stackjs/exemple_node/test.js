// Tests avec Mocha et Chai

// Assurez-vous d'installer mocha et chai avec `npm install mocha chai`

const { expect } = require('chai');

// Exemple de fonction à tester
function addition(a, b) {
    return a + b;
}

// Test unitaire avec Mocha et Chai
describe('Tests de la fonction addition', () => {
    it('devrait ajouter deux nombres correctement', () => {
        expect(addition(1, 2)).to.equal(3);
    });
});
