// Événements et Gestionnaires

// Sélectionner un bouton
const bouton = document.querySelector('button');

// Ajouter un gestionnaire d'événement
bouton.addEventListener('click', function() {
    alert('Bouton cliqué!');
});

// Gestion des événements avec une fonction nommée
function handleMouseOver() {
    console.log('Souris au-dessus de l\'élément');
}

const element = document.querySelector('#monElement');
element.addEventListener('mouseover', handleMouseOver);
