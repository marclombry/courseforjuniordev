-- Sélectionner toutes les données
SELECT * FROM utilisateurs;

-- Insérer de nouvelles données
INSERT INTO utilisateurs (nom, email, date_naissance, score) 
VALUES ('Charlie Renault', 'charlie@example.com', '1992-08-20', 88.5);

-- Mettre à jour des données existantes
UPDATE utilisateurs 
SET score = 90 
WHERE nom = 'Alice Dupont';

-- Supprimer des données
DELETE FROM utilisateurs 
WHERE nom = 'Bob Martin';
