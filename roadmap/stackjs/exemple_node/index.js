// Modules et Packages

// Exemple d'utilisation d'un module externe (express)
// Assurez-vous d'installer express avec `npm install express`

const express = require('express');
const app = express();
const port = 3000;

app.get('/', (req, res) => {
    res.send('Bonjour, Express!');
});

app.listen(port, () => {
    console.log(`Serveur en écoute sur http://localhost:${port}`);
});
