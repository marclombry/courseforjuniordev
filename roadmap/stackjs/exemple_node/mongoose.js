// Connexion à des Bases de Données

// Exemple avec MongoDB
// Assurez-vous d'installer mongoose avec `npm install mongoose`

const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/mon-db', {
    useNewUrlParser: true,
    useUnifiedTopology: true
}).then(() => {
    console.log('Connexion à MongoDB réussie!');
}).catch(err => {
    console.error('Erreur de connexion:', err);
});
