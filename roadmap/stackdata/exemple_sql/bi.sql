-- Agrégation de données pour un rapport BI
SELECT 
    p.categorie,
    SUM(f.montant) AS total_ventes,
    AVG(f.montant) AS moyenne_ventes,
    MAX(f.montant) AS vente_max,
    MIN(f.montant) AS vente_min
FROM faits_ventes f
JOIN dimensions_produit p ON f.produit_id = p.produit_id
GROUP BY p.categorie;

-- Création d'une vue pour les rapports BI
CREATE VIEW vue_rapports_bi AS
SELECT 
    p.categorie,
    SUM(f.montant) AS total_ventes,
    AVG(f.montant) AS moyenne_ventes,
    MAX(f.montant) AS vente_max,
    MIN(f.montant) AS vente_min
FROM faits_ventes f
JOIN dimensions_produit p ON f.produit_id = p.produit_id
GROUP BY p.categorie;
