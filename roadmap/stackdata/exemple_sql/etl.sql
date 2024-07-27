-- Création d'une table de faits pour le data warehousing
CREATE TABLE faits_ventes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produit_id INT,
    date_id INT,
    montant DECIMAL(10, 2),
    quantite INT
);

-- Création d'une table de dimensions pour le data warehousing
CREATE TABLE dimensions_produit (
    produit_id INT PRIMARY KEY,
    nom_produit VARCHAR(100),
    categorie VARCHAR(50)
);

-- Extraction de données d'une source, transformation, et chargement dans le data warehouse
INSERT INTO faits_ventes (produit_id, date_id, montant, quantite)
SELECT p.produit_id, d.date_id, v.montant, v.quantite
FROM ventes v
JOIN produits p ON v.produit = p.nom_produit
JOIN dates d ON v.date_vente = d.date;
