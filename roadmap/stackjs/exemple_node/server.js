// Serveurs Web avec Express

const express = require('express');
const app = express();
const port = 3000;

// Middleware
app.use(express.json());

// Routes
app.get('/', (req, res) => {
    res.send('Accueil');
});

app.get('/about', (req, res) => {
    res.send('À propos de nous');
});

// Lancement du serveur
app.listen(port, () => {
    console.log(`Serveur Express en écoute sur http://localhost:${port}`);
});
