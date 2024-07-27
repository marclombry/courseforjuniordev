-- Sélectionner avec des filtres
SELECT * FROM utilisateurs 
WHERE score > 80;

-- Tri des résultats
SELECT * FROM utilisateurs 
ORDER BY score DESC;

-- Limiter le nombre de résultats
SELECT * FROM utilisateurs 
ORDER BY score DESC 
LIMIT 5;
