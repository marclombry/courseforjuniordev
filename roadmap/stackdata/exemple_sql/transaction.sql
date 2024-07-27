-- Début d'une transaction
START TRANSACTION;

-- Exécuter plusieurs opérations
INSERT INTO utilisateurs (nom, email, date_naissance, score) VALUES ('David Bernard', 'david@example.com', '1991-12-12', 78.0);
UPDATE utilisateurs SET score = 85 WHERE nom = 'Charlie Renault';

-- Si tout va bien, valider la transaction
COMMIT;

-- En cas d'erreur, annuler la transaction
ROLLBACK;
