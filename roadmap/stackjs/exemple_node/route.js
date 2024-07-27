// Gestion des Routes

const express = require('express');
const app = express();
const port = 3000;

// Middleware pour JSON
app.use(express.json());

// Définition des routes
app.get('/user/:id', (req, res) => {
    const userId = req.params.id;
    res.send(`Utilisateur ID: ${userId}`);
});

app.post('/user', (req, res) => {
    const user = req.body;
    res.send(`Utilisateur créé: ${JSON.stringify(user)}`);
});

// Lancement du serveur
app.listen(port, () => {
    console.log(`Serveur en écoute sur http://localhost:${port}`);
});
