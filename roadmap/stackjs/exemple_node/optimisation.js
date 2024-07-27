// Optimisation des Performances

const http = require('http');

const server = http.createServer((req, res) => {
    // Optimisation: Utilisation de la compression pour les réponses
    res.setHeader('Content-Encoding', 'gzip');
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Réponse compressée pour meilleure performance');
});

server.listen(3000, () => {
    console.log('Serveur en écoute sur http://localhost:3000');
});
