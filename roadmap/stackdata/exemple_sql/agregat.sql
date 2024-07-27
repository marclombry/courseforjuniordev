-- Fonctions d'agrégation
SELECT COUNT(*) AS nombre_utilisateurs FROM utilisateurs;
SELECT AVG(score) AS score_moyen FROM utilisateurs;
SELECT MAX(score) AS score_max FROM utilisateurs;

-- Fonctions de manipulation de chaînes
SELECT nom, UPPER(nom) AS nom_majuscule, LENGTH(nom) AS longueur_nom 
FROM utilisateurs;
