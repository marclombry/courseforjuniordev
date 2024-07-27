// API et AJAX

// Exemple d'appel AJAX avec fetch
fetch('https://api.example.com/data')
    .then(response => response.json())
    .then(data => {
        console.log('Données reçues:', data);
    })
    .catch(error => {
        console.error('Erreur:', error);
    });

// Exemple de POST avec fetch
const postData = {
    nom: 'Alice',
    age: 30
};

fetch('https://api.example.com/submit', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify(postData)
})
    .then(response => response.json())
    .then(data => {
        console.log('Réponse:', data);
    })
    .catch(error => {
        console.error('Erreur:', error);
    });
