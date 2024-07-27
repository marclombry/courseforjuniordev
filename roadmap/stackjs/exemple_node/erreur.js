// Gestion des Erreurs

const express = require('express');
const app = express();
const port = 3000;

app.use(express.json());

// Route qui génère une erreur
app.get('/error', (req, res, next) => {
    try {
        throw new Error('Quelque chose s\'est mal passé!');
    } catch (err) {
        next(err);
    }
});

// Middleware de gestion des erreurs
app.use((err, req, res, next) => {
    console.error(err.stack);
    res.status(500).send('Erreur interne du serveur!');
});

app.listen(port, () => {
    console.log(`Serveur en écoute sur http://localhost:${port}`);
});
