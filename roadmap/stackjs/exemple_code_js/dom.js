// Manipulation du DOM

// Sélectionner un élément
const titre = document.querySelector('h1');

// Modifier le contenu de l'élément
titre.textContent = 'Titre modifié';

// Créer un nouvel élément
const nouveauParagraphe = document.createElement('p');
nouveauParagraphe.textContent = 'Ceci est un nouveau paragraphe.';

// Ajouter le nouvel élément au document
document.body.appendChild(nouveauParagraphe);

// Modifier les styles
titre.style.color = 'red';
titre.style.textAlign = 'center';
