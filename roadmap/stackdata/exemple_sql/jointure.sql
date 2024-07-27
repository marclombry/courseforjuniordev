-- Création de deux tables pour les jointures
CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT,
    produit VARCHAR(100),
    montant DECIMAL(10, 2),
    FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);

-- Insertion de quelques données exemple
INSERT INTO commandes (utilisateur_id, produit, montant) 
VALUES 
    (1, 'Laptop', 999.99),
    (1, 'Souris', 19.99),
    (2, 'Clavier', 49.99);

-- Jointure INNER
SELECT utilisateurs.nom, commandes.produit, commandes.montant
FROM utilisateurs
INNER JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;

-- Jointure LEFT
SELECT utilisateurs.nom, commandes.produit, commandes.montant
FROM utilisateurs
LEFT JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;

-- Jointure RIGHT
SELECT utilisateurs.nom, commandes.produit, commandes.montant
FROM utilisateurs
RIGHT JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;

-- Jointure FULL (non supportée nativement par MySQL, utiliser UNION)
SELECT utilisateurs.nom, commandes.produit, commandes.montant
FROM utilisateurs
LEFT JOIN commandes ON utilisateurs.id = commandes.utilisateur_id
UNION
SELECT utilisateurs.nom, commandes.produit, commandes.montant
FROM utilisateurs
RIGHT JOIN commandes ON utilisateurs.id = commandes.utilisateur_id;
