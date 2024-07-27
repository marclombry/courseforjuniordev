-- Création d'un index sur la colonne email
CREATE INDEX idx_email ON utilisateurs(email);

-- Requête optimisée utilisant l'index
SELECT * FROM utilisateurs WHERE email = 'alice@example.com';

-- Visualiser le plan d'exécution d'une requête
EXPLAIN SELECT * FROM utilisateurs WHERE email = 'alice@example.com';
