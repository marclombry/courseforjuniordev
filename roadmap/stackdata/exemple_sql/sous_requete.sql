-- Sélectionner les utilisateurs avec un score supérieur à la moyenne
SELECT * FROM utilisateurs
WHERE score > (SELECT AVG(score) FROM utilisateurs);

-- Sous-requête dans la clause FROM
SELECT u.nom, c.produit, c.montant
FROM (SELECT * FROM utilisateurs WHERE score > 80) AS u
JOIN commandes AS c ON u.id = c.utilisateur_id;
